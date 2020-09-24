<?php

namespace App\Http\Middleware;

use App\Models\ProductType;
use Closure;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \Menu::make('HeaderNavBar', function ($menu) {
            $menu->add('Продукция', ['route' => 'products']);
            $menu->add('Декор');
            $menu->add('Оформление');
            $menu->add('Услуги');
            $menu->add('Акции', ['route' => 'special.offers']);
            $menu->add('Диллерам');
            $menu->add('Контакты', ['route' => 'contact_page']);
            $menu->add('Новости', ['route' => 'news']);
        });
        \Menu::make('FooterNavBar', function ($menu) {
            $product = ProductType::get();
            foreach ($product as $value) {
                $menu->add($value->name, ['route' => ['products.type', 'type' => $value->id]]);
            }
            $menu->add('Эпитафии', ['action' => 'Home\ContactController@index']);
            $menu->add('Шрифты', ['action' => 'Home\ContactController@index']);
//            $menu->add('Одиночные памятники комлексы',['action' => 'Home\ContactController@index']);
//            $menu->add('Одиночные памятники саркофаги',['action' => 'Home\ContactController@index']);
//            $menu->add('Двойные памятник комлексы',['action' => 'Home\ContactController@index']);
        });
        return $next($request);
    }
}
