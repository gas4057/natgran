<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Products
 *
 * @property int $id
 * @property int $type_id
 * @property int $material_id
 * @property float $actual_price
 * @property float $old_price
 * @property string $name
 * @property string $info
 * @property string $image
 * @property string $description
 * @property string $specifications
 * @property string $product_code
 * @property string $size
 * @property string $weight
 * @property string $warranty
 * @property string $storage
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereActualPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereMaterialId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereOldPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereProductCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereSpecifications($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereStorage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereWarranty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereWeight($value)
 * @mixin \Eloquent
 * @property-read \App\Models\ProductMaterials $materials
 * @property-read \App\Models\ProductType $type
 * @property int $subtype_id
 * @property int $is_promotional
 * @property int $is_active
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ModifierCutting[] $cutting
 * @property-read int|null $cutting_count
 * @property-read \App\Models\ProductMaterials $material
 * @property-read int|null $modifiers_count
 * @property-read \App\Models\ProductSubtype $productSubtype
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereIsPromotional($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereSubtypeId($value)
 * @property float $saving
 * @property string|null $popularity
 * @property-read \App\Models\ProductSubtype|null $subtype
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product wherePopularity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereSaving($value)
 */
class Product extends Model
{
    protected $table = 'products';

    protected $attributes = [
        'is_active' => 1
    ];

    public function type()
    {
        return $this->belongsTo(ProductType::class);
    }

    public function material()
    {
        return $this->belongsTo(ProductMaterials::class);
    }

    public function modifiers()
    {
        return $this->hasManyThrough(Modifier::class, ModifierProduct::class,
            'product_type_id', 'id',
            'type_id', 'id');
    }

    public function subtype()
    {
        return $this->belongsTo(ProductSubtype::class);
    }

    public function cutting()
    {
        return $this->hasMany(ModifierCutting::class, 'product_id');
    }

    public function beautification()
    {
        $beautification = Beautification::where('product_type_id', $this->type_id)
            ->where('product_subtype_id', $this->subtype_id)
            ->get();
        return $beautification;
    }

    public function modelObject()
    {
        $objects = ObjectModel::where('product_type_id', $this->type_id)
            ->where('product_subtype_id', $this->subtype_id)
            ->get();
        return $objects;
    }

    public function modelObjectStella()
    {
        return $this->hasMany(ObjectModelStella::class, 'product_id');
    }

    public function sarcophagusImages()
    {
        return $this->hasMany(ProductImageForModel::class, 'product_id');
    }
}
