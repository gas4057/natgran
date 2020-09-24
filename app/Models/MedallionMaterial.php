<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\MedallionMaterial
 *
 * @property int $id
 * @property string $value
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MedallionMaterial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MedallionMaterial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MedallionMaterial query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MedallionMaterial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MedallionMaterial whereValue($value)
 * @mixin \Eloquent
 */
class MedallionMaterial extends Model
{
    protected $table = 'medallion_materials';
    public $timestamps = false;

}
