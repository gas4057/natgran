<?php

namespace App\Nova\Order;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Resource;

class Order extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\ClientOrder';
    public static $category = 'Заказы/Вопросы';

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
        'id', 'name', 'email', 'phone', 'total_price'
    ];

    public static function label()
    {
        return __('Заказы');
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
        return true;
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
            ID::make()
                ->onlyOnIndex(),
            Text::make('Имя', 'name')
                ->sortable(),
            Text::make('Телефон', 'phone')
                ->sortable(),
            Text::make('Почта', 'email')
                ->onlyOnDetail(),
            Textarea::make('Сообщение', 'message')
                ->onlyOnDetail(),
            belongsTo::make('Доставка', 'delivery', 'App\Nova\SiteSettings\Delivery')
                ->onlyOnDetail(),
            HasMany::make('Продукты', 'order', 'App\Nova\Order\OrderProducts')
                ->onlyOnDetail(),
            Text::make('Общая цена', 'total_price')
                ->hideWhenUpdating(),
            Boolean::make('Оплачено', 'is_paid')
                ->sortable(),
            Boolean::make('Заказ завершен', 'is_completed')
                ->sortable(),
            DateTime::make('Заказа оформлен', 'created_at')
                ->sortable()
                ->hideWhenUpdating(),
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
