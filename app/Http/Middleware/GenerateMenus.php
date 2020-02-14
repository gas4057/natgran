<?php

namespace App\Http\Middleware;

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
            $menu->add('Продукция');
            $menu->add('Декор');
            $menu->add('Оформление');
            $menu->add('Услуги');
            $menu->add('Акции');
            $menu->add('Диллерам');
            $menu->add('Контакты', ['action' => 'Home\ContactController@index']);
            $menu->add('Новости');
        });
        return $next($request);
    }
}
