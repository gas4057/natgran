<?php

namespace App\Services;

use App\Http\Controllers\Home\CartController;
use App\Models\ArticleType;
use App\Models\Banner;
use App\Models\CoefficientModifier;
use App\Models\CurrencyRate;
use App\Models\EngravingPortrait;
use App\Models\EngravingPortraitSize;
use App\Models\EngravingPortraitType;
use App\Models\Medallion;
use App\Models\MedallionForm;
use App\Models\MedallionMaterial;
use App\Models\MedallionSize;
use App\Models\ModifierCutting;
use App\Models\ModifierType;
use App\Models\ProductMaterials;
use App\Models\Product;
use App\Models\Modifier;
use App\Models\StellaImage;
use App\Models\TombstoneImage;
use App\Models\TombstoneTextColor;
use App\Models\TypeImage;
use Illuminate\Support\Carbon;
use Session;

class ProductSettingsServices
{
    public function showAttributes($id)
    {
        $product = Product::findOrFail($id);
        $materials = ProductMaterials::get()
            ->where('is_for_monument',true);
        $modifierTypes = ModifierType::get();
        $service = new RecommendedCartServices();
        $modifiersOldPrice = null;
        $arImgModel = [];
        $recommendedCarts = $service->getCarts($product->type_id);
        $breadcrumbs = 'productcard-'.$product->type_id.'-'. $product->subtype_id;
        if ($product->subtype_id != 1 and $product->subtype_id != 4) {
            $arImgModel = $this->getImgForModel($product);
        } else {

            /** получить упорядоченную размерную сетку по модификаторам */
            $obSizeChart = $this->getModifiersSizeChart($product, $modifierTypes);

            /** получить минимальные размеры по модификаторам */
            $data = $this->getMinModifiersSize($obSizeChart,$modifierTypes);

            /** получить цену за минимальный модификатор */
            foreach ($data as $key => $modifierAttr) {
                if (!empty($modifierAttr['first'])) {
                    $modifierTypeId = ModifierType::whereType($key)->value('id');
                    $total_price[$key] = $this->getPriceForModifier($modifierAttr['first'], $product, $modifierTypeId);
                }
            }
        }
        if ($product->is_promotional == true) {
            $modifiersOldPrice = $this->getOldPrice($data, $product, 'firstLoad',1);
            $modifiersOldPrice['total'] = array_sum($modifiersOldPrice);
        }
        $beautification = $product->beautification();
        $priceCharacters = TombstoneTextColor::first()->price;
        $engravingPortraitSize = EngravingPortraitSize::all();
        $engravingPortraitType = EngravingPortraitType::all();
        $medallionForm = MedallionForm::all();
        $medallionSize = MedallionSize::all();
        $medallionMaterial = MedallionMaterial::all();
        $colorsForText = TombstoneTextColor::all();
        $imgTypes = TypeImage::all();

        /** if imageType has images - take it */
        foreach ($imgTypes as $imgType) {
            if (StellaImage::whereTypeId($imgType->id)->get()->isNotEmpty()) {
                $imgTypesStella[$imgType->id] = TypeImage::find($imgType->id);
                $arStellaImages[$imgType->slug] = StellaImage::whereTypeId($imgType->id)->get();
            }
            if (TombstoneImage::whereTypeId($imgType->id)->get()->isNotEmpty()) {
                $imgTypesTombstone[$imgType->id] = TypeImage::find($imgType->id);
                $arTombstoneImages[$imgType->slug] = TombstoneImage::whereTypeId($imgType->id)->get();
            }
        }
        $engravingPortrait = EngravingPortrait::first();
        $medallion = Medallion::first();
        $cartItems = Session::has('cart') ? json_decode(Session::get('cart'), true) : null;
        $banner = Banner::where('key','monument')->first();
        $articlesFormalization = ArticleType::where('alias','formalization')->first()->articles;
        $moreEngraving = $articlesFormalization->where('key','Гравировка')->first();
        $moreMaterial = $articlesFormalization->where('key','Материал')->first();
        $moreMedallion = $articlesFormalization->where('key','Медальоны')->first();
        $moreText = $articlesFormalization->where('key','ТЕКСТ')->first();

        return view('monument.monument-card',
            with([
                'product' => $product,
                'stella' => $data['Stella'] ?? null,
                'pedestal' => $data['Pedestals'] ?? null,
                'parterre' => $data['Parterres'] ?? null,
                'tombstone' => $data['Tombstones'] ?? null,
                'total_price' => $total_price ?? null,
                'recommendedCarts' => $recommendedCarts,
                'modifierMaterials' => $materials,
                'beautification' => $beautification,
                'priceCharacters' => $priceCharacters,
                'medallionForm' => $medallionForm,
                'medallionSize' => $medallionSize,
                'medallionMaterial' => $medallionMaterial,
                'colorsForText' => $colorsForText,
                'engravingPortraitType' => $engravingPortraitType,
                'engravingPortraitSize' => $engravingPortraitSize,
                'arStellaImages' => $arStellaImages,
                'arTombstoneImages' => $arTombstoneImages,
                'imgTypesStella' => $imgTypesStella,
                'imgTypesTombstone' => $imgTypesTombstone,
                'engravingPortrait' => $engravingPortrait,
                'medallion' => $medallion,
                'breadcrumbs' => $breadcrumbs,
                'cartItems' => $cartItems,
                'banner' => $banner,
                'moreEngraving' => $moreEngraving,
                'moreMaterial' => $moreMaterial,
                'moreMedallion' => $moreMedallion,
                'moreText' => $moreText,
                'modifiersOldPrice' => $modifiersOldPrice,
                'arImgModel' => $arImgModel,
            ]));
    }

    public function setAttributes($request)
    {
        $oldPrice = null;
        $defaultMaterial = 1;
        $modifierName = $request->get('obj');
        $modifierData = $request->get($modifierName);
        $actualParam = $request->get('actualParam');
        $product = Product::findOrFail($request->get('product_id'));
        $idTypeModifier = ModifierType::where('type', 'like', $modifierName)
            ->get()
            ->pluck('id')
            ->first();
        $modifierByType = $product->type->modifier()
            ->where('modifiers.type_id', $idTypeModifier)
            ->get();
        $material_id = $modifierData['material'] ?? 1;
        $height = $modifierData['height'];
        $width = $modifierData['width'];
        $thickness = $modifierData['thickness'];
        $modifierName = ucfirst($modifierName);
        //Если модификатор цветник - находим его размер.
        $thicknessSize = '';
        if ($modifierName == 'Parterres') {
            $thicknessSize = $thickness;
            $thickness = Modifier::where('thickness_size', $thickness)
                ->pluck('thickness')
                ->first();
        }
        /* find other attributes */
        $modifier = $this->switchAttrOrder($modifierData, $modifierByType, $height, $width, $thickness, $thicknessSize);
        if ($modifier->isEmpty()) {
            $height = $actualParam == 'height' ? $height : null;
            $width = $actualParam == 'width' ? $width : null;
            $thickness = $actualParam == 'thickness' ? $thickness : null;
            $modifier = $this->switchAttrOrder($modifierData, $modifierByType, $height, $width, $thickness, $thicknessSize);
        }
        $modifier->first()['material'] = $material_id;
        //Если стелла то подбираем размеры и получаем цены по всем модификаторам
        if ($modifierName == 'Stella') {
            $arModifiers = $product->type->modifier()->get();
            /**
             * @var $obModifiersSizes 'получаем модификаторы соотв. стелле'
             * @var $modifierStella 'объект стеллы'
             */

            $modifierStella = $modifier->first();
            if ($modifierStella) {
                $obModifiersSizes = $this->ratioOfStellaSizesToModifiers($arModifiers, $product->type_id, $modifierStella);
                foreach ($obModifiersSizes as $modifierName => $iModifier) {
                    if ($iModifier != null) {
                        $idTypeModifier = ModifierType::where('type', 'like', $modifierName)->value('id');
                        $obModifiersSizes[$modifierName]['price'] = $this->getPriceForModifier($iModifier, $product, $idTypeModifier, $material_id);
                        $obModifiersSizes[$modifierName]['material'] = $material_id;
                        if ($modifierName != 'Stella') {
                            $obModifiersSizes[$modifierName]['material'] = $defaultMaterial;
                        }
                    }
                }
            }
            if ($product->is_promotional == true) {
                $oldPrice = $this->getOldPrice($obModifiersSizes, $product,'default', $material_id);
            }
            return json_encode([
                'modifier_size' => $obModifiersSizes,
                'old_price' => $oldPrice,
            ]);
        } else {
            $getModifierPrice = $this->getPriceForModifier($modifier->first(), $product, $idTypeModifier, $material_id);
            $modifierPrice = intval($getModifierPrice);
            $modifiersData[$modifierName] = $modifier->first();
            if ($product->is_promotional == true) {
                $oldPrice = $this->getPriceForModifier($modifier->first(), $product, $idTypeModifier, $material_id,40);
            }
            return json_encode([
                'modifier_size' => $modifiersData,
                'price_for_1st_size' => $modifierPrice,
                'material_id' => $material_id,
                'old_price' => $oldPrice,
            ]);
        }
    }

    public function ratioOfStellaSizesToModifiers($modifiers, $productTypeId, $modifierStella)
    {
        $modifierType = ModifierType::get();
        foreach ($modifierType as $key => $item) {
            switch ($modifierType) {
                case $item->type == "Stella":
                    $modifier[$item->type] = $modifierStella;
                    break;
                case $item->type == "Pedestals":
                    $width = $modifierStella->width;
                    $width = $productTypeId == 1 ? $width : $width - 40;
                    $modifier[$item->type] = $modifiers->where('type_id', $item->id)
                        ->where('height', $width)
                        ->first();
                    break;
                case $item->type == "Parterres" || $item->type == "Tombstones":
                    $modifier[$item->type] = $modifiers->where('type_id', $item->id)
                        ->where('height', $modifierStella->height)
                        ->where('width', $modifierStella->width)
                        ->first();
                    break;
            }
        }
        return $modifier;
    }

    public function switchAttrOrder($modifierData, $modifiers, $height, $width, $thickness, $thicknessSize)
    {
        switch ($modifierData != null) {
            case $height && $width && $thickness:
                $modifier_size = $modifiers->where('height', $height)->where('width', $width)
                    ->where('thickness_size', $thicknessSize)
                    ->where('thickness', $thickness);
                break;
            case $height && $width :
                $modifier_size = $modifiers->where('height', $height)->where('width', $width);
                break;
            case $height && $thickness:
                $modifier_size = $modifiers->where('height', $height)
                    ->where('thickness_size', $thicknessSize)
                    ->where('thickness', $thickness);
                break;
            case $thickness && $width:
                $modifier_size = $modifiers->where('width', $width)
                    ->where('thickness_size', $thicknessSize)
                    ->where('thickness', $thickness);
                break;
            case $height:
                $modifier_size = $modifiers->where('height', $height);
                break;
            case $width:
                $modifier_size = $modifiers->where('width', $width);
                break;
            case $thickness:
                $modifier_size = $modifiers
                    ->where('thickness_size', $thicknessSize)
                    ->where('thickness', $thickness);
                break;
        }
        return $modifier_size;
    }

    public function getPriceForModifier($modifierSize, $product, int $modifierTypeId, int $material_id = 1, $productPercent ='', $isCheckout = false)
    {
        $currency_rates = CurrencyRate::latest()->pluck('rate')->first() ?? 3;
        if (empty($productPercent)) {
            $productPercent = $product->is_promotional ? 30 : 40;
        }
        /** находим thickness модификатора,если это цветник. */
        if ($modifierTypeId == 3 and $isCheckout) {
            $thickness = Modifier::where('thickness_size', $modifierSize['thickness'])
                ->first()
                ->value('thickness');
            $modifierSize['thickness'] = $thickness;
        }
        if (!empty($modifierSize)) {
            $coefficientModifier = CoefficientModifier::where('thickness', $modifierSize['thickness'])
                ->where('material_id', $material_id)
                ->where('type_id', $modifierTypeId)
                ->get()
                ->pluck('coefficient')
                ->first();
        }
        $width = $modifierSize['width'] / 100;
        $height = $modifierSize['height'] / 100;
        $thickness = $modifierSize['thickness'] ?? null;

        //коэф за резку
        $cutting = ModifierCutting::where('product_id', $product->id)
            ->where('thickness', $thickness)
            ->get()
            ->pluck('coefficient')
            ->first();

        //change cutting coefficient for formula
        $thickness = $thickness != null ? $thickness / 100 : null;

        $coefficient = 0;
        $modifierName = ModifierType::find($modifierTypeId)->type;
        switch ($modifierName) {
            //считаем для стеллы (a * b * 130+25(резка стеллы)+40%(или30% если акция)) * курс валюты
            case 'Stella':
                $price = ($width * $height * $coefficientModifier + $cutting);
                if ($width * $height > 0.7) {
                    $coefficient = $price / 100 * 10;
                }
                if ($width * $height > 0.9) {
                    $coefficient = $price / 100 * 20;
                }
                $price += $coefficient;
                $percent = $price / 100 * $productPercent;

                $ceilPrice = ceil(($price + $percent) * $currency_rates);
                break;
            //считаем для плиты
            case 'Tombstones':
                $price = ($width * $height * $coefficientModifier + 20);
                if ($width * $height >= 0.7 || $width * $height < 0.9) {
                    $coefficient = $price / 100 * 10;
                }
                if ($width * $height > 0.9) {
                    $coefficient = $price / 100 * 20;
                }
                $percent = $price / 100 * $productPercent;
                $ceilPrice = ceil(($price + $percent + $coefficient) * $currency_rates);
                break;
            //считаем для цветника (a+a+b) * x(coefficient) + 20
            case 'Parterres':
                $price = ($width + $height + $height) * $coefficientModifier + 20;
                if ($height >= 1.2) {
                    $coefficient = $price / 100 * 10;
                }
                $percent = $price / 100 * $productPercent;
                $ceilPrice = ceil(($price + $percent + $coefficient) * $currency_rates);
                break;
            //считаем для тумбы (a * b * с *2700 +20 +40%(или30% если акция)) * курс валюты
            case 'Pedestals':
                $price = ($width * $height * $thickness * $coefficientModifier + 20);
                if ($height >= 1.2) {
                    $coefficient = $price / 100 * 10;
                }
                $percent = $price / 100 * $productPercent;
                $ceilPrice = ceil(($price + $percent + $coefficient) * $currency_rates);
                break;
        }
        return $ceilPrice;
    }

    public function saveProduct($request)
    {
        $priceForMedallion = null;
        $priceForEngraving = null;
        $priceForImg = 0;
        $priceForText = 0;
        $monumentQty = $request->has('monument_qty') ? $request->get('monument_qty') : 1;
        $productAttribute = $this->checkValueRequest($request);
        $productAttribute['left_date_of_birth'] = Carbon::createFromDate($request->get('left_date_of_birth'))
            ->format('Y-m-d');
        $productAttribute['left_date_of_die'] = Carbon::createFromDate($request->get('left_date_of_die'))
            ->format('Y-m-d');
        if (isset($productAttribute['right_date_of_birth']) || isset($productAttribute['right_date_of_die'])) {
            $productAttribute['right_date_of_birth'] = Carbon::createFromDate($productAttribute['right_date_of_birth'])
                ->format('Y-m-d');
            $productAttribute['right_date_of_die'] = Carbon::createFromDate($productAttribute['right_date_of_die'])
                ->format('Y-m-d');
        }
        if (isset($productAttribute['medallion_id'])) {
            $priceForMedallion = Medallion::findOrFail($productAttribute['medallion_id'])->price;
        }
        if (isset($productAttribute['engraving_id'])) {
            $priceForEngraving = EngravingPortrait::findOrFail($productAttribute['engraving_id'])->price;
        }
        if (isset($productAttribute['left_stella_color_id'])) {
            $priceForImg += TombstoneTextColor::findOrFail($productAttribute['left_stella_color_id'])->stella_price;
        }
        if (isset($productAttribute['right_stella_color_id'])) {
            $priceForImg += TombstoneTextColor::findOrFail($productAttribute['right_stella_color_id'])->stella_price;
        }
        if (isset($productAttribute['left_tombstone_color_id'])) {
            $priceForImg += TombstoneTextColor::findOrFail($productAttribute['left_tombstone_color_id'])->tombstone_price;
        }
        if (isset($productAttribute['right_tombstone_color_id'])) {
            $priceForImg += TombstoneTextColor::findOrFail($productAttribute['right_tombstone_color_id'])->tombstone_price;
        }
        if (isset($productAttribute['right_date_of_birth'])) {
            $priceForText += $this->priceForText($productAttribute['right_date_of_birth'], $productAttribute['dates_color_id']);
        }
        if (isset($productAttribute['right_date_of_die'])) {
            $priceForText += $this->priceForText($productAttribute['right_date_of_die'], $productAttribute['dates_color_id']);
        }
        if (isset($productAttribute['name_right'])) {
            $priceForText += $this->priceForText($productAttribute['name_right'], $productAttribute['name_color_id']);
        }
        if (isset($productAttribute['on_pedestal_epitaph'])) {
            $priceForText += $this->priceForText($productAttribute['on_pedestal_epitaph'], $productAttribute['epitaph_color_id']);
        }
        if (isset($productAttribute['left_epitaph'])) {
            $priceForText += $this->priceForText($productAttribute['left_epitaph'], $productAttribute['epitaph_color_id']);
        }
        if (isset($productAttribute['right_epitaph'])) {
            $priceForText += $this->priceForText($productAttribute['right_epitaph'], $productAttribute['epitaph_color_id']);
        }
        $priceForText += $this->priceForText($productAttribute['name_left'], $productAttribute['name_color_id']);
        $priceForText += $this->priceForText($productAttribute['left_date_of_birth'], $productAttribute['dates_color_id']);
        $priceForText += $this->priceForText($productAttribute['left_date_of_die'], $productAttribute['dates_color_id']);
        $data['Stella'] = $request->get('stella');
        $data['Pedestals'] = $request->get('pedestals');
        $product = Product::findOrFail($request->get('product_id'));
        $productAttr = 'Стелла + Тумба';
        if ($request->input('tombstones.height') != 0) {
            $data['Tombstones'] = $request->get('tombstones');
            $productAttr = $productAttr . ' + Плита';
        }
        if ($request->input('parterres.height') != 0) {
            $data['Parterres'] = $request->get('parterres');
            $productAttr = $productAttr . ' + Цветник';
        }
        $totalPrice = 0;
        foreach ($data as $key => $item) {
            if (!empty($item)) {
                $modifierId = ModifierType::get()->where('type', $key)->first();
                $modifierPrice[$key] = $this->getPriceForModifier($item, $product, $modifierId->id, $item['material'], '', true);
                $totalPrice += $modifierPrice[$key];
            }
        }
        $totalPrice += $priceForText + $priceForImg + $priceForMedallion + $priceForEngraving;
        if ($product->is_promotional == true) {
            $getOldPrices = $this->getOldPrice($data, $product, 'saveMonument');
            $oldTotalPrice = array_sum($getOldPrices);
        } else {
            $oldTotalPrice = null;
        }
        $productAttr = isset($priceForMedallion) ? $productAttr . ' + медальон' : $productAttr;
        $productAttr = isset($priceForEngraving) ? $productAttr . ' + гравировка' : $productAttr;
        $productAttr = isset($productAttribute['on_pedestal_epitaph']) ? $productAttr . ' + эпитафия на надгробе' : $productAttr;
        $productAttr = isset($productAttribute['left_epitaph']) ? $productAttr . ' + эпитафия на тумбу' : $productAttr;
        $productAttr = $productAttr . ' + ФИО';
        $productAttr = isset($productAttribute['beautification_id']) ? $productAttr . ' + благоустройство' : $productAttr;
        $product->atrModifiers = $productAttr;
        foreach ($data as $key => $item) {
            if (!empty($item)) {
                $modifiers[$key] = $item;
            }
        }
        $cartService = new CartController();
        $cartService->addMonumentToCart([
            'product' => $product,
            'attributes' => $productAttribute,
            'modifiers' => ['modifier' => $modifiers],
            'totalPrice' => $totalPrice,
            'oldTotalPrice' => $oldTotalPrice,
            'qty' => $monumentQty,
        ]);
        return route('cart.show');
    }

    public function checkProductType($id)
    {
        $product = Product::findOrFail($id);
        if ($product->type_id != 1 && $product->type_id != 2) {
            return abort(404);
        }
    }

    public function getPriceEngravingPortrait($request)
    {
        $size_id = $request->has('engraving_size_id') ? $request->get('engraving_size_id') : 1;
        $type_id = $request->has('engraving_type_id') ? $request->get('engraving_type_id') : 1;

        $data = EngravingPortrait::where('size_id', $size_id)
            ->where('type_id', $type_id)
            ->first();
        return $data;
    }

    public function getPriceMedallion($request)
    {
        $form_id = $request->has('medallion_form_id') ? $request->get('medallion_form_id') : 1;
        $size_id = $request->has('medallion_size_id') ? $request->get('medallion_size_id') : 1;
        $material_id = $request->has('medallion_material_id') ? $request->get('medallion_material_id') : 1;

        $data = Medallion::where('form_id', $form_id)
            ->where('size_id', $size_id)
            ->where('material_id', $material_id)
            ->first();

        return $data;
    }

    public function priceForText($text,$colorId)
    {
        $symbolPrice = TombstoneTextColor::find($colorId)->price;
        $text = $text ? $text : '';
        $value = str_replace(' ', '', $text);
        $count = iconv_strlen($value);
        $price = $count * $symbolPrice;
        return $price;
    }

    public function fastOrder($request)
    {
        $request->request->add([
            'delivery_id' => 1,
            'cashless_payment' => 'fastOrder',
        ]);
        $this->saveProduct($request);
        $service = new CheckoutServices();
        return $service->getCheckout($request);
    }

    public function getModels($request)
    {
        $storagePath = route('home') . '/storage/Product_3d_models/';
        $id = $request->get('product_id');
        $product = Product::findOrFail($id);
        $models3d = $product->ModelObject()->first();
        $models3d->texture = route('home') . '/storage/'.ProductMaterials::first()->image;

        /** if product has stella obj get it or get default obj. */
        if ($product->modelObjectStella()->exists()) {
            $storagePathStella = route('home') . '/storage/Product_3d_models_stella/';
            $models3d->stellaModel = $storagePathStella . ($product->modelObjectStella()->first()->stella);
        } else {
            $models3d->stellaModel = $storagePath . ($models3d->stella);
        }
        $models3d->tombstonesModel = $storagePath.($models3d->tombstones);
        $models3d->pedestalsModel = $storagePath.($models3d->pedestals);
        $models3d->parterresModel = $storagePath.($models3d->parterres);
        if($product->type_id == 2){
            $models3d->tombstonesModel_right = $storagePath.($models3d->tombstones_vertical_right);
            $models3d->tombstonesModel_left = $storagePath.($models3d->tombstones_vertical_left);
            $models3d->parterresModel_right = $storagePath.($models3d->parterres_vertical_right);
            $models3d->parterresModel_left = $storagePath.($models3d->parterres_vertical_left);
        }
        return $models3d;
    }

    public function getOldPrice($modifiers, $product, $method, $material_id = '')
    {
        switch ($method) {
            case 'firstLoad':
                foreach ($modifiers as $key => $modifier) {
                    $ModifierTypeId = ModifierType::whereType($key)->value('id');
                    $oldPrice[$key] = $this->getPriceForModifier($modifier['first'], $product, $ModifierTypeId, $material_id, 40);
                }
                break;
            case 'saveMonument':
                foreach ($modifiers as $key => $item) {
                    if (!empty($item)) {
                        $modifierId = ModifierType::get()->where('type', $key)->first();
                        $oldPrice[$key] = $this->getPriceForModifier($item, $product, $modifierId->id, $item['material'], 40);
                    }
                }
                break;
            case 'default':
                foreach ($modifiers as $key => $modifier) {
                    $ModifierTypeId = ModifierType::whereType($key)->value('id');
                    $oldPrice[$key] = $this->getPriceForModifier($modifier, $product, $ModifierTypeId, $material_id, 40);
                }
                break;
        }
        return $oldPrice;
    }

    public function getImgForModel($product)
    {
        if ($product->sarcophagusImages()->exists()) {
            return $images = $product->sarcophagusImages
                ->first()
                ->getMedia('images');
        }
    }

    public function getModifiersSizeChart(Product $product, $modifierTypes)
    {
        $data = array();
        foreach ($modifierTypes as $modifierType) {
            //формируем размерную сетку
            $thickness = $modifierType->id == 3 ? 'thickness_size' : 'thickness';
            $data[$modifierType->type]['width'] = $product->type->modifier()
                ->where('type_id', $modifierType->id)
                ->orderBy('width')
                ->get()
                ->unique('width');
            $data[$modifierType->type]['thickness'] = $product->type->modifier()
                ->where('type_id', $modifierType->id)
                ->orderBy($thickness)
                ->get()
                ->unique($thickness);
            $data[$modifierType->type]['height'] = $product->type->modifier()
                ->where('type_id', $modifierType->id)
                ->orderBy('height')
                ->get()
                ->unique('height');
        }
        return $data;
    }

    public function getMinModifiersSize($obSizeChart,$modifierTypes)
    {
        /** @var $minHeightModifier 'приоритет в мин.размере за высотой' */

        foreach ($modifierTypes as $key => $modifierType) {
            $minHeightModifier = Modifier::whereTypeId($modifierType->id)->get()->min('height');
            $minModifier = Modifier::whereTypeId($modifierType->id)
                ->where('height', $minHeightModifier)
                ->first();
            $thickness = $modifierType->id == 3 ? 'thickness_size' : 'thickness';

            $obSizeChart[$modifierType->type]['first'] = [
                'id' => $minModifier->id,
                'type_id' => $modifierType->id,
                'height' => $minModifier->height,
                'width' => $minModifier->width,
                'thickness' => $minModifier->thickness,
                'thickness_size' => $minModifier->$thickness
            ];
        }
        return $obSizeChart;
    }

    public function checkValueRequest($request)
    {
        $arRequest = $request->except('_token');
        $valRequest = [];
        foreach ($arRequest as $key => $value) {
            if ($request->has($key) and $value != '0' and $value != 'empty') {
                $valRequest[$key] = $request->get($key);
            }
        }
        return $valRequest;
    }

}
