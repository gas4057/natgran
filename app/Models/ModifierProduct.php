<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Modifier
 *
 * @property int $id
 * @property string $height
 * @property string $width
 * @property string $thickness
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereThickness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereWidth($value)
 * @mixin \Eloquent
 * @property int $products_id
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereProductsId($value)
 * @property int $modifier_id
 * @property int $type_product_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierProduct whereModifierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierProduct whereTypeProductId($value)
 * @property int $product_type_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierProduct whereProductTypeId($value)
 */
class ModifierProduct extends Model
{
    public $timestamps = false;
    protected $table = 'modifier_product_type';

}
