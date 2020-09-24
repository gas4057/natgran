<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProductBeautification
 *
 * @property int $id
 * @property int $order_id
 * @property int $beautification_id
 * @property string|null $description
 * @property-read \App\Models\Beautification $beautification
 * @property-read \App\Models\Order $order
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductBeautification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductBeautification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductBeautification query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductBeautification whereBeautificationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductBeautification whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductBeautification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductBeautification whereOrderId($value)
 * @mixin \Eloquent
 */
class ProductBeautification extends Model
{
    protected $table = 'product_beautifications';
    public $timestamps = false;
    protected $fillable = [
        'beautification_id'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    public function beautification()
    {
        return $this->belongsTo(Beautification::class, 'beautification_id', 'id');
    }
}
