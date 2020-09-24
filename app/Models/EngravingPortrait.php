<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\EngravingPortrait
 *
 * @property int $id
 * @property int $type_id
 * @property int $size_id
 * @property float $price
 * @property-read \App\Models\EngravingPortraitSize $size
 * @property-read \App\Models\EngravingPortraitType $type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EngravingPortrait newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EngravingPortrait newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EngravingPortrait query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EngravingPortrait whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EngravingPortrait wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EngravingPortrait whereSizeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EngravingPortrait whereTypeId($value)
 * @mixin \Eloquent
 */
class EngravingPortrait extends Model
{
    protected $table = 'engraving_portraits';
    public $timestamps = false;
    protected $fillable = [
        'type_id',
        'size_id',
        'price'
    ];

    public function size()
    {
        return $this->belongsTo(EngravingPortraitSize::class);
    }

    public function type()
    {
        return $this->belongsTo(EngravingPortraitType::class);
    }

    public function getSize()
    {
        $size = "Размер: " . $this->size->value . " Тип: " . $this->type->value;
        return $size;
    }
}
