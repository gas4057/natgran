<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TombstoneDates
 *
 * @property int $id
 * @property string|null $left_date_of_birth
 * @property string|null $left_date_of_die
 * @property string|null $right_date_of_birth
 * @property string|null $right_date_of_die
 * @property int $dates_color_id
 * @property int|null $order_id
 * @property-read \App\Models\TombstoneTextColor $color
 * @property-read \App\Models\Order|null $order
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneDates newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneDates newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneDates query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneDates whereDatesColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneDates whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneDates whereLeftDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneDates whereLeftDateOfDie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneDates whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneDates whereRightDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneDates whereRightDateOfDie($value)
 * @mixin \Eloquent
 */
class TombstoneDates extends Model
{
    protected $table = 'tombstone_dates';
    public $timestamps = false;
    protected $fillable = [
        'left_date_of_birth',
        'left_date_of_die',
        'right_date_of_birth',
        'right_date_of_die',
        'dates_color_id'
    ];

    public function color()
    {
        return $this->belongsTo(TombstoneTextColor::class, 'dates_color_id', 'id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

}
