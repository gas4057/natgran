<?php

namespace App\Nova\SiteSettings;

use App\Nova\Filters\ArticleFilter;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Resource;
use Manogi\Tiptap\Tiptap;

class Banner extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\Banner';
    public static $category = 'Настройки контента сайт';
    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'key', 'title', 'content'
    ];

    public static function label()
    {
        return __('Баннеры');
    }

    public static function singularLabel()
    {
        return __('Баннер');
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
                ->sortable()
                ->onlyOnIndex(),
//            Text::make('Ключ', 'key')
//                ->sortable()
//                ->rules('required', 'max:25'),
            Image::make('Изображение для Десктопа', 'desktop_img')
                ->help('разрешение изображения(1205*160)')
                ->disk('public')
                ->deletable(true)
                ->creationRules('required')
                ->path('Banners'),
            Image::make('Изображение для моб. уст-в', 'mobile_img')
                ->help('разрешение изображения(290*73)')
                ->disk('public')
                ->deletable(true)
                ->creationRules('required')
                ->path('Banners'),
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
