<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImageForModel extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'product_id',
    ];
    protected $casts = [
        'images' => 'array'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
