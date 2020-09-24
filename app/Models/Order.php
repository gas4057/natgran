<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Order
 *
 * @property int $id
 * @property int $product_id
 * @property int $engraving
 * @property int $color_id
 * @property int $parterre_id
 * @property int $pedestal_id
 * @property int $tombstone_id
 * @property int $stella_id
 * @property int $epitaph_id
 * @property string $contact_name
 * @property string $contact_phone
 * @property string $contact_email
 * @property string|null $contact_message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereContactEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereContactMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereContactName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereContactPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereEngraving($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereEpitaphId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereParterreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order wherePedestalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereStellaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereTombstoneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $client_id
 * @property int|null $portrait_size_id
 * @property int|null $portrait_type_id
 * @property int|null $parterres_id
 * @property int|null $pedestals_id
 * @property int|null $tombstones_id
 * @property float $price
 * @property int $count_product
 * @property-read \App\Models\ProductBeautification $beautification
 * @property-read \App\Models\ClientOrder $client
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TombstoneDates[] $dates_on_tombstone
 * @property-read int|null $dates_on_tombstone_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TombstoneEpitaph[] $epitaph
 * @property-read int|null $epitaph_count
 * @property-read \App\Models\ProductMedallion $medallion
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TombstoneName[] $names_on_tombstone
 * @property-read int|null $names_on_tombstone_count
 * @property-read \App\Models\ModifierProduct|null $parterre
 * @property-read \App\Models\ModifierProduct|null $pedestal
 * @property-read \App\Models\EngravingPortraitSize|null $portraitSize
 * @property-read \App\Models\EngravingPortraitType|null $portraitType
 * @property-read \App\Models\Product $product
 * @property-read \App\Models\ModifierProduct|null $stella
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductStellaImage[] $stella_image
 * @property-read int|null $stella_image_count
 * @property-read \App\Models\ModifierProduct|null $tombstone
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductTombstoneImage[] $tombstone_image
 * @property-read int|null $tombstone_image_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereCountProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereParterresId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order wherePedestalsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order wherePortraitSizeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order wherePortraitTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereTombstonesId($value)
 */
class Order extends Model
{
    protected $fillable = [
        'client_id',
        'product_id',
        'count_product',
        'parterres_id',
        'pedestals_id',
        'tombstones_id',
        'stella_id',
        'price',
        'engraving_id',
        'medallion_id',
    ];

    public function client()
    {
        return $this->belongsTo(ClientOrder::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function parterre()
    {
        return $this->belongsTo(ModifierProduct::class, 'parterres_id', 'id');
    }

    public function pedestal()
    {
        return $this->belongsTo(ModifierProduct::class, 'pedestals_id', 'id');
    }

    public function tombstone()
    {
        return $this->belongsTo(ModifierProduct::class, 'tombstones_id', 'id');
    }

    public function stella()
    {
        return $this->belongsTo(ModifierProduct::class, 'stella_id', 'id');
    }

    public function portrait()
    {
        return $this->belongsTo(EngravingPortrait::class, 'engraving_id');
    }

    public function names_on_tombstone()
    {
        return $this->hasMany(TombstoneName::class);
    }

    public function dates_on_tombstone()
    {
        return $this->hasMany(TombstoneDates::class);
    }

    public function epitaph()
    {
        return $this->hasMany(TombstoneEpitaph::class);
    }

    public function medallion()
    {
        return $this->belongsTo(Medallion::class, 'medallion_id', 'id');
    }

    public function stella_image()
    {
        return $this->hasMany(ProductStellaImage::class);
    }

    public function tombstone_image()
    {
        return $this->hasMany(ProductTombstoneImage::class);
    }

    public function beautification()
    {
        return $this->hasOne(ProductBeautification::class);
    }
}
