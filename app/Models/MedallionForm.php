<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\MedallionForm
 *
 * @property int $id
 * @property string $value
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MedallionForm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MedallionForm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MedallionForm query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MedallionForm whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MedallionForm whereValue($value)
 * @mixin \Eloquent
 */
class MedallionForm extends Model
{
    protected $table = 'medallion_forms';
    public $timestamps = false;
}
