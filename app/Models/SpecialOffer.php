<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SpecialOffer
 *
 * @property int $id
 * @property int $product_id
 * @property string|null $desc
 * @property string|null $image
 * @property string $date_start
 * @property string $date_end
 * @property int $is_active
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SpecialOffer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SpecialOffer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SpecialOffer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SpecialOffer whereDateEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SpecialOffer whereDateStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SpecialOffer whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SpecialOffer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SpecialOffer whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SpecialOffer whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SpecialOffer whereProductId($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Product $product
 * @property string $title
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SpecialOffer whereTitle($value)
 */
class SpecialOffer extends Model
{
    public $timestamps = null;

    protected $fillable = [
        'date_start','date_end'
    ];
    protected $casts = [
        'date_start' => 'date',
        'date_end' => 'date',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
