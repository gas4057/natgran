<?php

namespace App\Nova\HomePage;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Resource;
use Manogi\Tiptap\Tiptap;

class HomeArticles extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\HomeArticle';
    public static $category = 'Главная страница';
    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'key';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'title', 'key', 'content', 'alias'
    ];

    public static function label()
    {
        return __('Разделы');
    }

    public static function singularLabel()
    {
        return __('Раздел');
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
            Text::make('key')
                ->sortable()
                ->rules('required', 'max:25'),
//                ->hideWhenUpdating(),
//            Text::make('alias')
//                ->sortable()
//                ->hideWhenUpdating()
//                ->rules('required', 'max:25'),
            Text::make('title', function () {
                return Str::limit($this->title, 10);
            })->onlyOnIndex()
                ->sortable(),
            Textarea::make('title')
                ->help('Если поле пустое - оно не обязательно для текущего раздела.'),
//                ->rules('required')
//            Text::make('content', function () {
//                return Str::limit($this->content, 10);
//            })->onlyOnIndex(),
//            Tiptap::make('content')
//                ->onlyOnForms()
//                ->buttons([
//                    'heading',
//                    'italic',
//                    'bold',
//                    'code',
//                    'link',
//                    'strike',
//                    'underline',
//                    'bullet_list',
//                    'ordered_list',
//                    'code_block',
//                    'blockquote',
//                ])
//                ->headingLevels([2, 3, 4, 5, 6]),
//            Text::make('content')
//                ->showOnDetail()
//                ->hideWhenUpdating()
//                ->hideWhenCreating()
//                ->sortable()
////                ->rules('required')
//                ->hideFromIndex(),
            Image::make('image')
                ->disk('public')
                ->deletable(true)
                ->creationRules('required')
                ->help('Внимание! Не все изображения этих разделов выводятся на фронте.')
                ->path('HomeArticles'),
            HasMany::make('Блоки к статьям', 'block', 'App\Nova\HomePage\HomeArticleBlock')->onlyOnDetail(),
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
