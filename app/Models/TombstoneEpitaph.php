<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TombstoneEpitaph
 *
 * @property int $id
 * @property string|null $on_pedestal_epitaph
 * @property string|null $left_epitaph
 * @property string|null $right_epitaph
 * @property int $epitaph_color_id
 * @property int|null $order_id
 * @property-read \App\Models\TombstoneTextColor $color
 * @property-read \App\Models\Order|null $order
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneEpitaph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneEpitaph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneEpitaph query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneEpitaph whereEpitaphColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneEpitaph whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneEpitaph whereLeftEpitaph($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneEpitaph whereOnPedestalEpitaph($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneEpitaph whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneEpitaph whereRightEpitaph($value)
 * @mixin \Eloquent
 */
class TombstoneEpitaph extends Model
{
    protected $table = 'tombstone_epitaphs';
    public $timestamps = false;
    protected $fillable = [
        'on_pedestal_epitaph',
        'left_epitaph',
        'right_epitaph',
        'epitaph_color_id',
        'epitaph_color_id',
    ];

    public function color()
    {
        return $this->belongsTo(TombstoneTextColor::class, 'epitaph_color_id', 'id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
}
