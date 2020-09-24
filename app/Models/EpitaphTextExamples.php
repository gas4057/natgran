<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\EpitaphTextExamples
 *
 * @property int $id
 * @property int $type_id
 * @property string $text
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextExamples newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextExamples newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextExamples query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextExamples whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextExamples whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextExamples whereTypeId($value)
 * @mixin \Eloquent
 * @property-read \App\Models\EpitaphTextType $type
 */
class EpitaphTextExamples extends Model
{
    public function type()
    {
        return $this->belongsTo(EpitaphTextType::class);
    }
}
