<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\InfoAboutProduct
 *
 * @property int $id
 * @property int $type_id
 * @property string $about
 * @property string $details
 * @property string $price
 * @property string $advantage
 * @property string $characteristics
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $products
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct whereAdvantage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct whereCharacteristics($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\ProductType $type
 */
class InfoAboutProduct extends Model
{
    protected $table = 'info_about_products';

    public function products()
    {
        return $this->belongsTo(Product::class);
    }

    public function type()
    {
        return $this->belongsTo(ProductType::class);
    }
}
