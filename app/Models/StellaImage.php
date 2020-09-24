<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\StellaImage
 *
 * @property int $id
 * @property int $type_id
 * @property string|null $image
 * @property-read \App\Models\TypeImage $type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StellaImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StellaImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StellaImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StellaImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StellaImage whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StellaImage whereTypeId($value)
 * @mixin \Eloquent
 */
class StellaImage extends Model
{
    protected $table = 'stella_images';
    public $timestamps = false;
    protected $fillable = [
        'image',
        'price',
    ];

    public function type()
    {
        return $this->belongsTo(TypeImage::class, 'type_id', 'id');
    }
}
