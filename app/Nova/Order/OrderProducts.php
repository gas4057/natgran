<?php

namespace App\Nova\Order;

use App\Models\EngravingPortrait;
use App\Models\Modifier;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Resource;

class OrderProducts extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\Order';
    public static $category = 'Заказы/Вопросы';
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
        return __('Продукты к заказу');
    }

    public static function authorizedToCreate(Request $request)
    {
        return false;
    }

    public function authorizedToDelete(Request $request)
    {
        return false;
    }

    public function authorizedToUpdate(Request $request)
    {
        return false;
    }

    public static function searchable()
    {
        return true;
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
            BelongsTo::make('Продукт', 'product', 'App\Nova\ProductSettings\Product')
                ->sortable(),
            Text::make('Цена', 'price'),
            Text::make('Кол-во товара', 'count_product'),
            Text::make('Цветник', function () {
                if ($this->parterres_id) {
                    $size = Modifier::where('id', $this->parterres_id)
                        ->first()
                        ->getSize();
                    return $size;
                } else {
                    return '';
                }
            })->onlyOnDetail(),
            Text::make('Тумба', function () {
                if ($this->pedestals_id) {
                    $size = Modifier::where('id', $this->pedestals_id)
                        ->first()
                        ->getSize();
                    return $size;
                } else {
                    return '';
                }
            })->onlyOnDetail(),
            Text::make('Плита', function () {
                if ($this->tombstones_id) {
                    $size = Modifier::where('id', $this->tombstones_id)
                        ->first()
                        ->getSize();
                    return $size;
                } else {
                    return '';
                }
            })->onlyOnDetail(),
            Text::make('Стелла', function () {
                if ($this->stella_id) {
                    $size = Modifier::where('id', $this->stella_id)
                        ->first()
                        ->getSize();
                    return $size;
                } else {
                    return '';
                }
            })->onlyOnDetail(),
            Text::make('Портрет', function () {
                if ($this->engraving_id) {
                    $size = EngravingPortrait::where('id', $this->engraving_id)
                        ->first()
                        ->getSize();
                    return $size;
                } else {
                    return '';
                }
            })->onlyOnDetail(),
            HasMany::make('Имена на плите', 'names_on_tombstone', 'App\Nova\Order\TombstoneName')
                ->onlyOnDetail(),
            HasMany::make('Даты на плите', 'dates_on_tombstone', 'App\Nova\Order\TombstoneDates')
                ->onlyOnDetail(),
            HasMany::make('Эпитафия', 'epitaph', 'App\Nova\Order\TombstoneEpitaph')
                ->onlyOnDetail(),
            HasMany::make('Изображения на стелле', 'stella_image', 'App\Nova\Order\ProductStellaImage')
                ->onlyOnDetail(),
            HasMany::make('Изображения на плите', 'tombstone_image', 'App\Nova\Order\ProductTombstoneImage')
                ->onlyOnDetail(),
//            BelongsTo::make('Портрет', 'portrait', 'App\Nova\ProductSettings\EngravingPortrait')
//                ->onlyOnDetail(),
//            BelongsTo::make('Медальон', 'medallion', 'App\Nova\Medallion'),
            BelongsTo::make('Благоустройство', 'beautification', 'App\Nova\ProductSettings\Beautification'),
            Text::make('Медальон', function () {
                if ($this->medallion_id) {
                    $size = \App\Models\Medallion::where('id', $this->medallion_id)
                        ->first()
                        ->getAttr();
                    return $size;
                } else {
                    return '';
                }
            })->onlyOnDetail(),

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
