<?php

namespace App\Nova\HomePage;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Resource;

class HomeProduct extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\HomeProduct';
    public static $category = 'Главная страница';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','tab_title','text_more'
    ];

    public static function label()
    {
        return __('Товар на главной');
    }

    public static function singularLabel()
    {
        return __('Товар');
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
            Text::make('tab_title')
                ->sortable()
                ->rules('required', 'max:25'),
            Text::make('text_more')
                ->sortable()
                ->rules('required'),
            Text::make('nest_id')
                ->help('Приоритет для вывода на гл.стр.')
                ->sortable(),
            BelongsTo::make('продукт_1', 'product1', 'App\Nova\ProductSettings\Product'),
            BelongsTo::make('продукт_2', 'product2', 'App\Nova\ProductSettings\Product'),
            BelongsTo::make('продукт_3', 'product3', 'App\Nova\ProductSettings\Product'),

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
