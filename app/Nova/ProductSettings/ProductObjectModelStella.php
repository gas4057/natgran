<?php

namespace App\Nova\ProductSettings;

use App\Nova\Resource;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\File;

class ProductObjectModelStella extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\ObjectModelStella';

    public static $category = 'Настройки продукта';

    /** hide in navigation panel  */
    public static $displayInNavigation = false;

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
        return __('3D модели стеллы');
    }

    public static function singularLabel()
    {
        return __('Модель стеллы');
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
            ID::make()
                ->onlyOnIndex()
                ->sortable(),
            BelongsTo::make('Название', 'Product', 'App\Nova\ProductSettings\Product'),
            File::make('Стелла','stella')
                ->storeOriginalName('stella')
                ->required()
                ->disk('public')
                ->storeAs(function (Request $request) {
                    return ($request->stella->getClientOriginalName());
                })
                ->path('Product_3d_models_stella'),
            File::make('Стелла_mtl','stella_mtl')
                ->storeOriginalName('stella_mtl')
                ->required()
                ->disk('public')
                ->storeAs(function (Request $request) {
                    return ($request->stella_mtl->getClientOriginalName());
                })
                ->path('Product_3d_models_stella'),

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
