<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ObjectModel
 *
 * @property int $id
 * @property int|null $product_type_id
 * @property int|null $product_subtype_id
 * @property string|null $stella
 * @property string|null $tombstones
 * @property string|null $pedestals
 * @property string|null $parterres
 * @property string|null $stella_mtl
 * @property string|null $tombstones_mtl
 * @property string|null $pedestals_mtl
 * @property string|null $parterres_mtl
 * @property-read \App\Models\ProductSubtype|null $ProductSubtype
 * @property-read \App\Models\ProductType|null $ProductType
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ObjectModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ObjectModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ObjectModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ObjectModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ObjectModel whereParterres($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ObjectModel whereParterresMtl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ObjectModel wherePedestals($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ObjectModel wherePedestalsMtl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ObjectModel whereProductSubtypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ObjectModel whereProductTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ObjectModel whereStella($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ObjectModel whereStellaMtl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ObjectModel whereTombstones($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ObjectModel whereTombstonesMtl($value)
 * @mixin \Eloquent
 */
class ObjectModel extends Model
{
    protected $fillable = [
        'product_type_id',
        'product_subtype_id',
        'stella',
        'tombstones',
        'pedestals',
        'parterres',
        'stella_mtl',
        'tombstones_mtl',
        'pedestals_mtl',
        'parterres_mtl',
    ];
    public $timestamps = false;
    protected $table = 'object_models';

    public function ProductType()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id', 'id');
    }

    public function ProductSubtype()
    {
        return $this->belongsTo(ProductSubtype::class, 'product_subtype_id', 'id');
    }
}
