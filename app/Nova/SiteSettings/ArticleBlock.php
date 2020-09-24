<?php

namespace App\Nova\SiteSettings;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Resource;
use Manogi\Tiptap\Tiptap;

class ArticleBlock extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\ArticleBlock';
    public static $category = 'Настройки контента сайт';
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
        return __('Статьи - Блоки');
    }

    public static function singularLabel()
    {
        return __('Блок статьи');
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
            ID::make()->sortable()
                ->onlyOnIndex(),
            BelongsTo::make('Заголовок', 'article', 'App\Nova\SiteSettings\Articles'),
            Textarea::make('text_block')
                ->sortable()
                ->showOnDetail()
                ->hideWhenUpdating()
                ->hideWhenCreating(),
            Tiptap::make('Блоки','text_block')
                ->rules('required')
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
            Text::make('Заголовок_1','caption_1')
                ->sortable()
                ->showOnDetail()
                ->hideWhenUpdating()
                ->hideWhenCreating(),
            Tiptap::make('Заголовок_1','caption_1')
//                ->rules('required')
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
            Image::make('Изображение_1','image_1')
                ->disk('public')
                ->path('ArticleBlocks'),
            Text::make('Заголовок_2','caption_2')
                ->sortable()
                ->showOnDetail()
                ->hideWhenUpdating()
                ->hideWhenCreating(),
            Tiptap::make('Заголовок_2','caption_2')
//                ->rules('required')
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
            Image::make('Изображение_2','image_2')
                ->disk('public')
                ->path('ArticleBlocks'),
            Text::make('title')
                ->sortable()
                ->showOnDetail()
                ->hideWhenUpdating()
                ->hideWhenCreating(),
            Tiptap::make('title')
//                ->rules('required')
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
            Text::make('Текст к заголовку','caption_text')
                ->sortable()
                ->showOnDetail()
                ->hideWhenUpdating()
                ->hideWhenCreating(),
            Tiptap::make('Текст к заголовку','caption_text')
//                ->rules('required')
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