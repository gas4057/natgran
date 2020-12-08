<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Jenssegers\Date\Date;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \View::composer(
            [
                'layouts.home_layouts',
                'home.home',
                'home.question',
            ], 'App\Http\ViewComposer\HomeComposer');
        Schema::defaultStringLength(191);
        Date::setlocale(config('app.locale'));
    }
}
