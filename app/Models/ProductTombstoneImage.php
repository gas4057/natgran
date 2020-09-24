<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProductTombstoneImage
 *
 * @property int $id
 * @property int|null $left_tombstone_image_id
 * @property int|null $right_tombstone_image_id
 * @property int|null $left_tombstone_color_id
 * @property int|null $right_tombstone_color_id
 * @property int|null $order_id
 * @property-read \App\Models\TombstoneTextColor|null $left_color
 * @property-read \App\Models\TombstoneImage|null $left_image
 * @property-read \App\Models\Order|null $order
 * @property-read \App\Models\TombstoneTextColor|null $right_color
 * @property-read \App\Models\TombstoneImage|null $right_image
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductTombstoneImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductTombstoneImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductTombstoneImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductTombstoneImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductTombstoneImage whereLeftTombstoneColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductTombstoneImage whereLeftTombstoneImageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductTombstoneImage whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductTombstoneImage whereRightTombstoneColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductTombstoneImage whereRightTombstoneImageId($value)
 * @mixin \Eloquent
 */
class ProductTombstoneImage extends Model
{
    protected $table = 'product_tombstone_images';
    public $timestamps = false;
    protected $fillable = [
        'left_tombstone_image_id',
        'right_tombstone_image_id',
        'left_tombstone_color_id',
        'right_tombstone_color_id',
        'order_id',
    ];

    public function left_image()
    {
        return $this->belongsTo(TombstoneImage::class, 'left_tombstone_image_id', 'id');
    }

    public function right_image()
    {
        return $this->belongsTo(TombstoneImage::class, 'right_tombstone_image_id', 'id');
    }

    public function right_color()
    {
        return $this->belongsTo(TombstoneTextColor::class, 'right_tombstone_color_id', 'id');
    }

    public function left_color()
    {
        return $this->belongsTo(TombstoneTextColor::class, 'left_tombstone_color_id', 'id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
}
