<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TombstoneName
 *
 * @property int $id
 * @property string|null $name_left
 * @property string|null $name_right
 * @property int $name_color_id
 * @property int|null $order_id
 * @property-read \App\Models\TombstoneTextColor $color
 * @property-read \App\Models\Order|null $order
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneName newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneName newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneName query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneName whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneName whereNameColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneName whereNameLeft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneName whereNameRight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneName whereOrderId($value)
 * @mixin \Eloquent
 */
class TombstoneName extends Model
{
    protected $table = 'tombstone_names';
    public $timestamps = false;
    protected $fillable = [
        'name_left',
        'name_right',
        'name_color_id',
        'order_id',
    ];

    public function color()
    {
        return $this->belongsTo(TombstoneTextColor::class, 'name_color_id', 'id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
}
