<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class ProductImageForModel extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = 'product_image_for_models';

    public $timestamps = false;

    protected $fillable = [
        'product_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
