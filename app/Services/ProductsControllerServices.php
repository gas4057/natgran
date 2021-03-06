<?php

namespace App\Services;

use App\Models\Banner;
use App\Models\InfoAboutProduct;
use App\Models\Product;
use App\Models\ProductSubtype;
use App\Models\ProductType;
use Cookie;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;
use function GuzzleHttp\Promise\all;

class ProductsControllerServices
{
    public function index()
    {
        $products = ProductType::with('subtype')->get();
        $monument_cross = ProductSubtype::where('id', 4)->first();
        $breadcrumbs = 'products';
        return view('products.index', compact('products', 'monument_cross', 'breadcrumbs'));
    }


    public function showByType($request, int $typeId, $subtypeId = '')
    {
        $this->checkSubtype($typeId, $subtypeId);
        $prod_type = ProductType::findOrFail($typeId);
        $prodSubtypeName = $subtypeId != null ? ProductSubtype::findOrFail($subtypeId)->only('subtype_name')['subtype_name'] : '';
        $activeTab = Str::slug($prod_type->name . '-' . $prodSubtypeName);
        $data_paginate = ['9', '12', '15', '18'];
        $data_orderBy = [
            'is_promotional' => 'сначала акционные',
            'popularity_asc' => 'по популярности по возрастанию',
            'popularity_desc' => 'по популярности по убыванию',
            'cheap' => 'по цене по убыванию',
            'expensive' => 'по цене по возрастанию'
        ];
        $sort = $request->has('sort') ? $request->get('sort') : null;
        $paginate = \Session::has('paginate') ? \Session::get('paginate') : $data_paginate[0];
        $orderBy = array_key_exists($sort, $data_orderBy) ? $sort : 'actual_price';

        $types = ProductType::with('subtype')->get();
        if (empty($subtypeId) and $types->find($typeId)->subtype()->first()){
            $subtypeId = $types->find($typeId)->subtype()->first()->id;
        }
        $products = Product::whereTypeId($typeId)
            ->where('subtype_id', $subtypeId)
            ->where('is_active', true)
            ->orderBy('is_promotional', 'desc')
            ->paginate($paginate);
        if (empty($products->items()) and !isset($subtypeId)) {
            $products = $this->getAllItemsType($typeId, $paginate);
        }
        $sortBy = \Session::has('sortBy') ? \Session::get('sortBy') : 'is_promotional';
        $about = InfoAboutProduct::whereTypeId($typeId)
            ->get();
        $banner = Banner::where('key', 'monument')->first();
        $breadcrumbs = 'product';
        return view('products.type', compact('products','prod_type', 'about', 'data_paginate',
            'data_orderBy', 'paginate', 'sortBy', 'banner', 'types', 'activeTab', 'breadcrumbs', 'subtypeId'));
    }

    public function sort($request)
    {
        $type_id = $request->get('type_id');
        $subtypeId = $request->get('subtype_id') != 0 ? $request->get('subtype_id') : null;
        $productType = ProductType::find($type_id);
        if (!isset($subtypeId) && $productType->subtype()->exists()) {
            $subtypeId = ProductType::find($type_id)->subtype->pluck('id');
            $where = 'whereIn';
        } else {
            $where = 'where';
        }
        $sortBy = $request->get('sortBy');
        $paginate = $request->get('paginate');
        \Session::put('paginate', $paginate);
        \Session::put('sortBy', $sortBy);
        switch ($sortBy) {
            //по популярности по убыванию
            case ($sortBy == 'popularity_desc'):
                $products = Product::whereTypeId($type_id)
                    ->$where('subtype_id', $subtypeId)
                    ->where('is_active', true)
                    ->orderBy('popularity', 'desc')
                    ->inRandomOrder()
                    ->paginate($paginate)
                    ->setPath(route('products.type', $type_id));
                break;
            //по популярности по возрастанию
            case ($sortBy == 'popularity_asc'):
                $products = Product::whereTypeId($type_id)
                    ->$where('subtype_id', $subtypeId)
                    ->where('is_active', true)
                    ->orderBy('popularity', 'asc')
                    ->inRandomOrder()
                    ->paginate($paginate)
                    ->setPath(route('products.type', $type_id));
                break;
            //акционные
            case ($sortBy == 'is_promotional'):
                $products = Product::whereTypeId($type_id)
                    ->$where('subtype_id', $subtypeId)
                    ->where('is_active', true)
                    ->orderBy('is_promotional', 'desc')
                    ->inRandomOrder()
                    ->paginate($paginate)
                    ->setPath(route('products.type', $type_id));
                break;
            //от дешевых к дорогим
            case ($sortBy == 'cheap'):
                $products = Product::whereTypeId($type_id)
                    ->$where('subtype_id', $subtypeId)
                    ->where('is_active', true)
                    ->orderBy('actual_price', 'desc')
                    ->inRandomOrder()
                    ->paginate($paginate)
                    ->setPath(route('products.type', $type_id));
                break;
            //от дорогих к дешевым
            case ($sortBy == 'expensive'):
                $products = Product::whereTypeId($type_id)
                    ->$where('subtype_id', $subtypeId)
                    ->where('is_active', true)
                    ->orderBy('actual_price', 'asc')
                    ->inRandomOrder()
                    ->paginate($paginate)
                    ->setPath(route('products.type', $type_id));
                break;

            default:
                $products = Product::whereTypeId($type_id)
                    ->$where('subtype_id', $subtypeId)
                    ->where('is_active', true)
                    ->paginate($paginate)
                    ->inRandomOrder()
                    ->setPath(route('products.type', $type_id));
                break;
        }
        $Html = view('products.sortProduct', compact('products', 'paginate'))->render();
        return response()->json(['success' => true, 'html' => $Html], 200);
    }

    public function decor()
    {
        $banner = Banner::where('key', 'monument')->first();;
        $monument_cross = ProductSubtype::where('id', 4)->first();
        $products = ProductType::with('subtype')->get();
        $breadcrumbs = 'decor';
        return view('products.decor', compact('products', 'banner', 'breadcrumbs'));
    }

    public function checkSubtype($typeId, $subtypeId)
    {
        $productType = ProductType::findOrFail($typeId);
        if (isset($subtypeId)) {
            if (!$productType->subtype->find($subtypeId)) {
                return abort(404);
            }
        }
    }

    public function getAllItemsType($typeId, $paginate)
    {
        $types = ProductType::find($typeId)->subtype->pluck('id');
        $products = Product::whereTypeId($typeId)
            ->whereIn('subtype_id', $types)
            ->where('is_active', true)
            ->orderBy('is_promotional', 'desc')
            ->inRandomOrder()
            ->paginate($paginate);
        return $products;
    }
}
