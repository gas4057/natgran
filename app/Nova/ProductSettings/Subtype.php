<?php

namespace App\Nova\ProductSettings;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Resource;

class Subtype extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\ProductSubtype';
    public static $category = 'Настройки продукта';
    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'subtype_name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','subtype_name'
    ];

    public static $displayInNavigation = false;

    public static function label()
    {
        return __('Типы продукта - подтипы');
    }

    public static function singularLabel()
    {
        return __('Подтип продукта');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('название','subtype_name')
                ->sortable()
                ->rules('required'),
            Text::make('Полное название','full_name')
                ->sortable()
                ->rules('required'),
//            Text::make('название','info')
//                ->sortable()
//                ->rules('required'),
            Text::make('Короткое описание','short_desc')
                ->sortable()
                ->rules('required'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
