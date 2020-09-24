<?php

namespace App\Nova\ProductSettings;

use App\Nova\Resource;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Manmohanjit\BelongsToDependency\BelongsToDependency;

class ProductObjectModel extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\ObjectModel';

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
        return __('3D модели');
    }

    public static function singularLabel()
    {
        return __('Модель');
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
            BelongsTo::make('Тип', 'ProductType', 'App\Nova\ProductSettings\ProductType'),
            BelongsToDependency::make('Подтип', 'ProductSubtype', 'App\Nova\ProductSettings\Subtype')
                ->dependsOn('ProductType', 'type_id')
                ->required(),
            File::make('Стелла','stella')
                ->storeOriginalName('stella')
                ->required()
                ->disk('public')
                ->storeAs(function (Request $request) {
                    return ($request->stella->getClientOriginalName());
                })
                ->path('Product_3d_models'),
            File::make('Плита', 'tombstones')
                ->storeOriginalName('tombstones')
                ->required()
                ->disk('public')
                ->storeAs(function (Request $request) {
                    return ($request->tombstones->getClientOriginalName());
                })
                ->path('Product_3d_models'),
            File::make('Тумба', 'pedestals')
                ->storeOriginalName('pedestals')
                ->required()
                ->disk('public')
                ->storeAs(function (Request $request) {
                    return ($request->pedestals->getClientOriginalName());
                })
                ->path('Product_3d_models'),
            File::make('Цветник', 'parterres')
                ->storeOriginalName('parterres')
                ->required()
                ->disk('public')
                ->storeAs(function (Request $request) {
                    return ($request->parterres->getClientOriginalName());
                })
                ->path('Product_3d_models'),
            File::make('', 'tombstones_vertical_right')
                ->storeOriginalName('tombstones_vertical_right')
                ->required()
                ->disk('public')
                ->storeAs(function (Request $request) {
                    return ($request->tombstones_vertical_right->getClientOriginalName());
                })
                ->path('Product_3d_models'),

            File::make('', 'tombstones_vertical_left')
                ->storeOriginalName('tombstones_vertical_left')
                ->required()
                ->disk('public')
                ->storeAs(function (Request $request) {
                    return ($request->tombstones_vertical_left->getClientOriginalName());
                })
                ->path('Product_3d_models'),
            File::make('', 'parterres_vertical_right')
                ->storeOriginalName('parterres_vertical_right')
                ->required()
                ->disk('public')
                ->storeAs(function (Request $request) {
                    return ($request->parterres_vertical_right->getClientOriginalName());
                })
                ->path('Product_3d_models'),
            File::make('', 'parterres_vertical_left')
                ->storeOriginalName('parterres_vertical_left')
                ->required()
                ->disk('public')
                ->storeAs(function (Request $request) {
                    return ($request->parterres_vertical_left->getClientOriginalName());
                })
                ->path('Product_3d_models'),
//
//            File::make('stella_mtl')
//                ->storeOriginalName('stella_mtl')
//                ->required()
//                ->disk('public')
//                ->path('Product_3d_models'),
//            File::make('tombstones_mtl')
//                ->storeOriginalName('tombstones_mtl')
//                ->required()
//                ->disk('public')
//                ->path('Product_3d_models'),
//            File::make('pedestals_mtl')
//                ->storeOriginalName('pedestals_mtl')
//                ->required()
//                ->disk('public')
//                ->path('Product_3d_models'),
//            File::make('parterres_mtl')
//                ->storeOriginalName('parterres_mtl')
//                ->required()
//                ->disk('public')
//                ->path('Product_3d_models'),
//            File::make('tombstones_vertical_right_mtl')
//                ->storeOriginalName('tombstones_vertical_right_mtl')
//                ->required()
//                ->disk('public')
//                ->path('Product_3d_models'),
//            File::make('tombstones_vertical_left_mtl')
//                ->storeOriginalName('tombstones_vertical_left_mtl')
//                ->required()
//                ->disk('public')
//                ->path('Product_3d_models'),
//            File::make('parterres_vertical_right_mtl')
//                ->storeOriginalName('parterres_vertical_right_mtl')
//                ->required()
//                ->disk('public')
//                ->path('Product_3d_models'),
//            File::make('parterres_vertical_left_mtl')
//                ->storeOriginalName('parterres_vertical_left_mtl')
//                ->required()
//                ->disk('public')
//                ->path('Product_3d_models'),
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
