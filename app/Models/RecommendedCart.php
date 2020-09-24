<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecommendedCart extends Model
{
    public function type()
    {
        return $this->belongsTo(ProductType::class,'product_type_id');
    }
}
