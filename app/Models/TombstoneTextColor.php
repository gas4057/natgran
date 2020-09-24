<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TombstoneTextColor
 *
 * @property int $id
 * @property string $color
 * @property float $price
 * @property float|null $stella_price
 * @property float|null $tombstone_price
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneTextColor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneTextColor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneTextColor query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneTextColor whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneTextColor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneTextColor wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneTextColor whereStellaPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneTextColor whereTombstonePrice($value)
 * @mixin \Eloquent
 */
class TombstoneTextColor extends Model
{
    protected $table = 'tombstone_text_colors';
    public $timestamps = false;

    protected $fillable = [
        'color',
        'price',
    ];
}
