<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProductMaterials
 *
 * @property int $id
 * @property string $name
 * @property string $info
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductMaterials newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductMaterials newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductMaterials query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductMaterials whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductMaterials whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductMaterials whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductMaterials whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductMaterials whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductMaterials whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 */
class ProductMaterials extends Model
{
    protected $table = 'product_materials';

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
