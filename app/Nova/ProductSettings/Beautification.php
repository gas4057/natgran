<?php

namespace App\Nova\ProductSettings;

use App\Nova\Filters\ProductTypeFilter;
use AwesomeNova\Filters\DependentFilter;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Resource;
use Manmohanjit\BelongsToDependency\BelongsToDependency;

class Beautification extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\Beautification';
    public static $category = 'Настройки продукта';

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
        'id',
    ];

    public static function label()
    {
        return __('Благоустройство');
    }

    public static function singularLabel()
    {
        return __('Благоустройство');
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
            BelongsTo::make('Тип', 'type', 'App\Nova\ProductSettings\ProductType'),
            BelongsToDependency::make('Подтип', 'Subtype', 'App\Nova\ProductSettings\Subtype')
                ->dependsOn('type', 'type_id')
                ->nullable(),
            Text::make('Цена','price')
                ->sortable()
                ->rules('required'),
            Text::make('Описание','description'),
            Image::make('Изображение','image')
                ->disk('public')
                ->deletable(false)
                ->creationRules('required')
                ->rules('image')
                ->path('Beautification'),
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
