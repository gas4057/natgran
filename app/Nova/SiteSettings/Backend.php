<?php

namespace App\Nova\SiteSettings;

use App\Nova\Filters\ArticleFilter;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Resource;
use Manogi\Tiptap\Tiptap;

class Backend extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\Articles';
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
        'id',
    ];

    public static function label()
    {
        return __('Backend');
    }

    public static function singularLabel()
    {
        return __('Backend');
    }

    protected static function applyFilters(NovaRequest $request, $query, array $filters)
    {
        return $query->where('article_type_id', 1);
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
            Boolean::make('Активно', 'is_active'),
            BelongsTo::make('Тип', 'type', 'App\Nova\SiteSettings\ArticleType')
            ->onlyOnIndex(),
            Text::make('Ключ', 'key')
                ->onlyOnIndex()
                ->help('Ключ должен быть уникальным')
                ->sortable()
                ->rules('required', 'max:25'),
            Text::make('Заголовок', 'title')
                ->sortable()
                ->showOnDetail()
                ->hideWhenUpdating()
                ->hideWhenCreating(),
            Textarea::make('Контент', 'content')
                ->sortable()
                ->showOnDetail()
                ->hideWhenUpdating()
                ->hideWhenCreating(),
            Tiptap::make('Заголовок', 'title')
                ->required()
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
            Tiptap::make('Контент', 'content')
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
            HasMany::make('Блоки к статьям', 'block', 'App\Nova\SiteSettings\BackendArticleBlock')
                ->onlyOnDetail(),
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
