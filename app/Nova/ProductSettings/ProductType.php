<?php

namespace App\Nova\ProductSettings;

use App\Nova\Filters\ProductTypeFilter;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Resource;

class ProductType extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\ProductType';
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
        'id', 'name', 'info'
    ];

    public static function label()
    {
        return __('Типы продукта');
    }

    public static function singularLabel()
    {
        return __('Тип продукта');
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
            ID::make()->sortable(),
            Text::make('Название','name')
                ->rules('required'),
            Text::make('Информация','info')
                ->rules('required'),
            Image::make('Изображение','image')
                ->disk('public')
                ->deletable(false)
                ->creationRules('required')
                ->rules('image', 'max:100')
                ->path('ProductType'),
            Text::make('Больше продуктов','more_product')
                ->rules('required'),
            HasMany::make('Подтип','subtype', 'App\Nova\ProductSettings\Subtype'),
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
        return [];
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
