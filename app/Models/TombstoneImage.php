<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TombstoneImage
 *
 * @property int $id
 * @property int $type_id
 * @property string|null $image
 * @property-read \App\Models\TypeImage $type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneImage whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneImage whereTypeId($value)
 * @mixin \Eloquent
 */
class TombstoneImage extends Model
{
    protected $table = 'tombstone_images';
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
