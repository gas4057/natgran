<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Subtype
 *
 * @property int $id
 * @property int $type_id
 * @property string $subtype_name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @property-read \App\Models\ProductType $type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductSubtype newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductSubtype newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductSubtype query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductSubtype whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductSubtype whereSubtypeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductSubtype whereTypeId($value)
 * @mixin \Eloquent
 * @property string|null $full_name
 * @property string|null $info
 * @property string|null $image
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductSubtype whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductSubtype whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductSubtype whereInfo($value)
 */
class ProductSubtype extends Model
{
    public $timestamps = false;
    protected $table = 'product_subtypes';

    public function products()
    {
        return $this->hasMany(Product::class,'subtype_id','id');
    }

    public function type()
    {
        return $this->belongsTo(ProductType::class);
    }
}
