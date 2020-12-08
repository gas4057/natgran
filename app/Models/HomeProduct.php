<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\HomeProduct
 *
 * @property int $id
 * @property string $tab_title
 * @property int $product_id_1
 * @property int $product_id_2
 * @property int $product_id_3
 * @property string $text_more
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $product1
 * @property-read \App\Models\Product $product2
 * @property-read \App\Models\Product $product3
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeProduct whereProductId1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeProduct whereProductId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeProduct whereProductId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeProduct whereTabTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeProduct whereTextMore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HomeProduct whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class HomeProduct extends Model
{

    protected $fillable = [
        'nest_id'
    ];
    public function product1()
    {
        return $this->belongsTo(Product::class,'product_id_1');
    }
    public function product2()
    {
        return $this->belongsTo(Product::class,'product_id_2');
    }
    public function product3()
    {
        return $this->belongsTo(Product::class,'product_id_3');
    }
}
