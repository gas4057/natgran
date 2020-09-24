<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TypeImage
 *
 * @property int $id
 * @property string $type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TypeImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TypeImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TypeImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TypeImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TypeImage whereType($value)
 * @mixin \Eloquent
 */
class TypeImage extends Model
{
    protected $table = 'type_images';
    public $timestamps = false;

    protected $fillable = [
        'type',
        'slug',
    ];
}
