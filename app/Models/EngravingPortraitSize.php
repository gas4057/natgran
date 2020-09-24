<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\EngravingPortraitSize
 *
 * @property int $id
 * @property string $value
 * @property float $price
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EngravingPortraitSize newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EngravingPortraitSize newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EngravingPortraitSize query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EngravingPortraitSize whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EngravingPortraitSize wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EngravingPortraitSize whereValue($value)
 * @mixin \Eloquent
 */
class EngravingPortraitSize extends Model
{
    protected $table = 'engraving_portrait_sizes';
    public $timestamps = false;
    protected $fillable = [
        'value',
        'price',
    ];

}
