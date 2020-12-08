<?php

namespace App\Nova\SiteSettings;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Resource;
use Manogi\Tiptap\Tiptap;

class Gallery extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\Gallery';
    public static $category = 'Настройки контента сайт';

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
        'title',
        'desc',
    ];

    public static function label()
    {
        return __('Галерея');
    }

    public static function singularLabel()
    {
        return __('Изображение');
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
            Text::make('Заголовок','title')
                ->rules('required')
                ->sortable()
                ->showOnDetail()
                ->hideWhenUpdating()
                ->hideWhenCreating(),
            Text::make('Описание','desc')
                ->rules('required')
                ->sortable()
                ->showOnDetail()
                ->hideWhenUpdating()
                ->hideWhenCreating(),
            Tiptap::make('Заголовок','title')
                ->onlyOnForms()
                ->buttons([
                    'heading',
                    'italic',
                    'bold',
                    'code',
                    'link',
                    'strike',
                    'underline',
                    'bullet_list',
                    'ordered_list',
                    'code_block',
                    'blockquote',
                ])
                ->headingLevels([2, 3, 4, 5, 6]),
            Tiptap::make('Описание','desc')
                ->onlyOnForms()
                ->buttons([
                    'heading',
                    'italic',
                    'bold',
                    'code',
                    'link',
                    'strike',
                    'underline',
                    'bullet_list',
                    'ordered_list',
                    'code_block',
                    'blockquote',
                ])
                ->headingLevels([2, 3, 4, 5, 6]),
            Image::make('Изображение','image')
                ->help('разрешение изображения(359*437)')
                ->disk('public')
                ->rules('required')
                ->path('Gallery')
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
