<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Medallion
 *
 * @property int $id
 * @property int $form_id
 * @property int $size_id
 * @property int $material_id
 * @property float $price
 * @property-read \App\Models\MedallionForm $form
 * @property-read \App\Models\MedallionMaterial $material
 * @property-read \App\Models\MedallionSize $size
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Medallion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Medallion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Medallion query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Medallion whereFormId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Medallion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Medallion whereMaterialId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Medallion wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Medallion whereSizeId($value)
 * @mixin \Eloquent
 */
class Medallion extends Model
{
    protected $table = 'medallions';
    public $timestamps = false;

    public function size()
    {
        return $this->belongsTo(MedallionSize::class, 'size_id');
    }

    public function form()
    {
        return $this->belongsTo(MedallionForm::class, 'form_id');
    }

    public function material()
    {
        return $this->belongsTo(MedallionMaterial::class, 'material_id');
    }

    public function getAttr()
    {
        $attribute = 'Форма: ' . $this->form->value .
            '; Материал: ' . $this->material->value .
            '; Размер: ' . $this->size->value;
        return $attribute;
    }
}
