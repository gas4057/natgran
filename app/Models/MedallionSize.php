<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\MedallionSize
 *
 * @property int $id
 * @property string $value
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MedallionSize newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MedallionSize newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MedallionSize query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MedallionSize whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MedallionSize whereValue($value)
 * @mixin \Eloquent
 */
class MedallionSize extends Model
{
    protected $table = 'medallion_sizes';
    public $timestamps = false;

}
