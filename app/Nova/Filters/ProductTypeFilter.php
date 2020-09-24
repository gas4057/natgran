<?php

namespace App\Nova\Filters;

use App\Models\ProductType;
use AwesomeNova\Filters\DependentFilter;
use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;

class ProductTypeFilter extends DependentFilter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $name = 'ProductType';
    public $attribute = 'type_id';

    /**
     * Apply the filter to the given query.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
//    public function apply(Request $request, $query, $value)
//    {
//        return $query;
//    }

    /**
     * Get the filter's available options.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Collection
     */
    public function options(Request $request, $filters = [])
    {
        return ProductType::pluck('name', 'id');
    }
}
