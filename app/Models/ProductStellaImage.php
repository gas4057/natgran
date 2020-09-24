<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProductStellaImage
 *
 * @property int $id
 * @property int|null $left_stella_image_id
 * @property int|null $right_stella_image_id
 * @property int|null $left_stella_color_id
 * @property int|null $right_stella_color_id
 * @property int|null $order_id
 * @property-read \App\Models\TombstoneTextColor|null $left_color
 * @property-read \App\Models\StellaImage|null $left_image
 * @property-read \App\Models\Order|null $order
 * @property-read \App\Models\TombstoneTextColor|null $right_color
 * @property-read \App\Models\StellaImage|null $right_image
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductStellaImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductStellaImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductStellaImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductStellaImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductStellaImage whereLeftStellaColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductStellaImage whereLeftStellaImageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductStellaImage whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductStellaImage whereRightStellaColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductStellaImage whereRightStellaImageId($value)
 * @mixin \Eloquent
 */
class ProductStellaImage extends Model
{
    protected $table = 'product_stella_images';
    public $timestamps = false;
    protected $fillable = [
        'left_stella_image_id',
        'right_stella_image_id',
        'left_stella_color_id',
        'right_stella_color_id',
        'order_id',
    ];

    public function left_image()
    {
        return $this->belongsTo(StellaImage::class, 'left_stella_image_id', 'id');
    }

    public function right_image()
    {
        return $this->belongsTo(StellaImage::class, 'right_stella_image_id', 'id');
    }

    public function right_color()
    {
        return $this->belongsTo(TombstoneTextColor::class, 'right_stella_color_id', 'id');
    }

    public function left_color()
    {
        return $this->belongsTo(TombstoneTextColor::class, 'left_stella_color_id', 'id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
}
