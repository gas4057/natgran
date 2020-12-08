<?php

namespace App\Nova\ProductSettings;

use App\Models\ModifierProduct;
use App\Models\ModifierType;
use App\Nova\Filters\ModifierFilter;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Resource;

class Modifier extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\Modifier';
    public static $category = 'Настройки продукта';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
   public function title()
    {
        return $this->getSize();
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'width', 'height', 'thickness','thickness_size'
    ];

    public static function label()
    {
        return __('Модификаторы продукта - размеры');
    }

    public static function singularLabel()
    {
        return __('Модификатор');
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
            BelongsTo::make('Тип', 'typeName', 'App\Nova\ProductSettings\ModifierType'),
            Text::make('Размер', 'size', function () {
                return $this->getSize();
            })
                ->hideWhenUpdating()
                ->hideWhenCreating(),
            Text::make('Высота', 'height')
                ->rules('required')
                ->onlyOnForms(),
            Text::make('Ширина', 'width')
                ->rules('required')
                ->onlyOnForms(),
            Text::make('Толщина', 'thickness')
                ->rules('required')
                ->onlyOnForms(),
            Text::make('Толщина рамер', 'thickness_size')
                ->help("поле необходимо для цветника (9x8)"),
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
           new ModifierFilter,
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
