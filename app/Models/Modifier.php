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
 * @property int $type_id
 * @property string|null $thickness_size
 * @property-read \App\Models\ModifierType $typeName
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereThicknessSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereTypeId($value)
 */
class Modifier extends Model
{
    public $timestamps = false;
    protected $table = 'modifiers';
    protected $fillable = [
        'height',
        'width',
        'thickness',
    ];

    public function getSize()
    {
        $size = "Высота:" . $this->height . " Ширина:" . $this->width . " Толщина:" . $this->thickness;
        return $size;
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function typeName()
    {
        return $this->belongsTo(ModifierType::class, 'type_id');
    }
}
