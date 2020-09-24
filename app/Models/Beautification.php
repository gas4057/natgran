<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Beautification
 *
 * @property int $id
 * @property string|null $image
 * @property float|null $price
 * @property int $product_type_id
 * @property int $product_subtype_id
 * @property-read \App\Models\ProductSubtype $subtype
 * @property-read \App\Models\ProductType $type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Beautification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Beautification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Beautification query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Beautification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Beautification whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Beautification wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Beautification whereProductSubtypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Beautification whereProductTypeId($value)
 * @mixin \Eloquent
 */
class Beautification extends Model
{
    public $timestamps = false;
    protected $table = 'beautification';

    protected $fillable = [
        'product_subtype_id',
        'product_type_id',
        'price',
        'image',
        'description',
    ];

    public function type()
    {
        return $this->belongsTo(ProductType::class,'product_type_id');
    }

    public function subtype()
    {
        return $this->belongsTo(ProductSubtype::class,'product_subtype_id');
    }
}
