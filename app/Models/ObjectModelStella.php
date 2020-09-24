<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObjectModelStella extends Model
{
    protected $fillable = [
        'product_id',
        'stella',
        'stella_mtl',
    ];
    public $timestamps = false;
    protected $table = 'stella_object_models';

    public function Product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

}
