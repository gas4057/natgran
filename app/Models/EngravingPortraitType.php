<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\EngravingPortraitType
 *
 * @property int $id
 * @property string $value
 * @property float $price
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EngravingPortraitType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EngravingPortraitType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EngravingPortraitType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EngravingPortraitType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EngravingPortraitType wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EngravingPortraitType whereValue($value)
 * @mixin \Eloquent
 */
class EngravingPortraitType extends Model
{
    protected $table = 'engraving_portrait_types';
    public $timestamps = false;
    protected $fillable = [
        'value',
        'price',
    ];
}
