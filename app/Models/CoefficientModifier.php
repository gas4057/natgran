<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CoefficientModifier
 *
 * @property int $id
 * @property int $type_id
 * @property int $material_id
 * @property string|null $thickness
 * @property int $coefficient
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoefficientModifier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoefficientModifier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoefficientModifier query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoefficientModifier whereCoefficient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoefficientModifier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoefficientModifier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoefficientModifier whereMaterialId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoefficientModifier whereThickness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoefficientModifier whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoefficientModifier whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CoefficientModifier extends Model
{
    protected $table = 'coefficient_modifiers';
    protected $fillable = [
        'type_id',
        'material_id',
        'thickness',
        'coefficient',
    ];

    public function material()
    {
        return $this->belongsTo(ProductMaterials::class);
    }

    public function type()
    {
        return $this->belongsTo(ModifierType::class);
    }
}

