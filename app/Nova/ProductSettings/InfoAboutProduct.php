<?php

namespace App\Nova\ProductSettings;

use Illuminate\Support\Str;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Resource;

class InfoAboutProduct extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\InfoAboutProduct';
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
        'id', 'about', 'payment', 'delivery',
    ];

    public static function label()
    {
        return __('Информация о типе продукта');
    }

    public static function singularLabel()
    {
        return __('Информацию');
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
            BelongsTo::make('Тип', 'type', 'App\Nova\ProductSettings\ProductType'),
            Text::make('О типе','about', function () {
                return Str::limit($this->about, 15);
            })->onlyOnIndex(),
//            Textarea::make('О типе','about')
//                ->rules('required')
//                ->alwaysShow(),
//            Text::make('Детали','details', function () {
//                return Str::limit($this->about, 15);
//            })->onlyOnIndex(),
//            Textarea::make('Детали','details')
//                ->rules('required')
//                ->alwaysShow(),
//            Text::make('Цена','price')
//                ->rules('required'),
            Text::make('Оплата','payment')
                ->rules('required'),
            Text::make('Доставка','delivery')
                ->rules('required'),
//            Text::make('Преимущество','advantage')
//                ->rules('required'),
//            Text::make('Характеристика','characteristics')
//                ->rules('required')
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
