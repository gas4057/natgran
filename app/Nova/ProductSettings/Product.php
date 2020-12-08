<?php

namespace App\Nova\ProductSettings;

use App\Nova\Filters\ProductTypeFilter;
use AwesomeNova\Filters\DependentFilter;
use Illuminate\Http\Request;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Resource;
use Manmohanjit\BelongsToDependency\BelongsToDependency;

class Product extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\Product';

    public static $category = 'Настройки продукта';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name',
        'info',
        'product_code',
        'description',
    ];

    public static function label()
    {
        return __('Продукты');
    }

    public static function singularLabel()
    {
        return __('Продукт');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable()
                ->onlyOnIndex(),
            Text::make('Название', 'name')
                ->hideFromIndex()
                ->rules('required'),
            BelongsTo::make('Тип', 'type', 'App\Nova\ProductSettings\ProductType')
                ->help('Лучше выбирать тип сразу правильно без дальнейшего изминения, так как возможны ошибки из-за зависимостей'),
            BelongsToDependency::make('Подтип', 'Subtype', 'App\Nova\ProductSettings\Subtype')
                ->dependsOn('type', 'type_id')
                ->nullable()
                ->help('Лучше выбирать подтип сразу правильно без дальнейшего изминения, так как возможны ошибки из-за зависимостей'),
            BelongsTo::make('Материал', 'material', 'App\Nova\ProductSettings\ProductMaterials')
                ->nullable(),
            HasMany::make('Модель стеллы (простые памятники)', 'modelObjectStella', 'App\Nova\ProductSettings\ProductObjectModelStella')
                ->nullable(),
            HasMany::make('Изображения для рендера модели (комплексы,саркофаги)',
                'sarcophagusImages', 'App\Nova\ProductSettings\ProductImageForModel'),
            HasMany::make('Резка','cutting','App\Nova\ProductSettings\ModifierCutting'),
            Text::make('Актуальня цена', 'actual_price')
                ->rules('required'),
            Text::make('Старая цена', 'old_price')
                ->rules('required'),
            Text::make('Экономия', 'saving')
                ->rules('required')
                ->hideFromIndex(),
            Text::make('Информация о продукте', 'info')
                ->rules('required')
                ->hideFromIndex(),
//            Text::make('Спецификация', 'specifications')
//                ->rules('required')
//                ->hideFromIndex(),
            Text::make('Размеры', 'size')
                ->rules('required')
                ->hideFromIndex(),
            Text::make('Вес', 'weight')
                ->rules('required')
                ->hideFromIndex(),
            Text::make('Гарантия', 'warranty')
                ->rules('required')
                ->hideFromIndex(),
            Text::make('Хранение', 'storage')
                ->rules('required')
                ->hideFromIndex(),
            Text::make('Код продукта', 'product_code')
                ->rules('required')
                ->hideFromIndex(),
            Text::make('Описание', 'description')
                ->rules('required')
                ->hideFromIndex(),
            Number::make('Популярность', 'popularity')
                ->sortable(),
            Boolean::make('Акционный', 'is_promotional')
                ->sortable(),
            Boolean::make('Активен', 'is_active')
                ->sortable(),
            Image::make('Изображение', 'image')
                ->disk('public')
                ->help('разрешение изображения 320*388')
//                ->rules('required')
                ->path('Products')
                ->hideFromIndex(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            new ProductTypeFilter('ProductType', 'type_id'),

            DependentFilter::make('ProductSubType', 'subtype_id')
                ->dependentOf('type_id')
                ->withOptions(function (Request $request, $filters) {
                    return \App\Models\ProductSubtype::where('type_id', $filters['type_id'])
                        ->pluck('subtype_name', 'id');
                }),
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
