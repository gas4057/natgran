<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ModifierCutting
 *
 * @property int $id
 * @property int $product_id
 * @property int $modifier_type_id
 * @property string|null $thickness
 * @property int $coefficient
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierCutting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierCutting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierCutting query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierCutting whereCoefficient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierCutting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierCutting whereModifierTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierCutting whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierCutting whereThickness($value)
 * @mixin \Eloquent
 */
class ModifierCutting extends Model
{
    protected $table = 'modifier_cutting';
    public $timestamps = false;
    //
}
