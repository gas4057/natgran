<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ModifierType
 *
 * @property int $id
 * @property \App\Models\ModifierType $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ModifierType extends Model
{
    public function type()
    {
        return $this->belongsTo(ModifierType::class);
    }
}
