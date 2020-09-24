<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProductType
 *
 * @property int $id
 * @property string $name
 * @property string $info
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductType whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductType whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductType whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read int|null $info_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @property string $more_product
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductSubtype[] $productSubtype
 * @property-read int|null $subtype_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductType whereMoreProduct($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Modifier[] $modifier
 * @property-read int|null $modifier_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductSubtype[] $subtype
 */
class ProductType extends Model
{
    protected $table = 'product_types';

    public function getInfo()
    {
        return $this->hasMany(InfoAboutProduct::class,'type_id','id');
    }

    public function products()
    {
        return $this->hasMany(Product::class,'type_id');
    }

    public function subtype()
    {
        return $this->hasMany(ProductSubtype::class,'type_id');
    }

    public function modifier()
    {
        return $this->belongsToMany(Modifier::class)->withPivot('product_type_id', 'modifier_id');
    }

}
