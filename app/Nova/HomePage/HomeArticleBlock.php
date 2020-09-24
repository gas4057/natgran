<?php

namespace App\Nova\HomePage;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Resource;
use Manogi\Tiptap\Tiptap;

class HomeArticleBlock extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\HomeArticleBlock';
    public static $category = 'Главная страница';
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
        'title', 'desc', 'text_block'
    ];

    public static function label()
    {
        return __('Разделы - элементы');
    }

    public static function singularLabel()
    {
        return __('Элемент');
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
            BelongsTo::make('article', 'article', 'App\Nova\HomePage\HomeArticles'),
            Text::make('title', function () {
                return Str::limit($this->title, 10);
            })->onlyOnIndex(),
            Text::make('desc', function () {
                return Str::limit($this->desc, 10);
            })->onlyOnIndex(),
            Text::make('text_block', function () {
                return Str::limit($this->text_block, 10);
            })->onlyOnIndex(),

            Text::make('title')
                ->sortable()
                ->hideFromIndex(),
            Text::make('desc')
                ->sortable()
                ->hideFromIndex(),
            Textarea::make('text_block')
                ->sortable()
                ->rules('required')
                ->hideFromIndex()
                ->hideWhenUpdating()
                ->hideWhenCreating(),
            Tiptap::make('text_block')
                ->onlyOnForms()
                ->required()
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
            Image::make('Изображение (446*432)','image')
                ->disk('public')
                ->path('HomeArticleBlocks'),
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
