<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ClientOrder
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property int|null $delivery_id
 * @property int $is_paid
 * @property int $is_completed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Delivery[] $delivery
 * @property-read int|null $delivery_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder whereDeliveryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder whereIsCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder whereIsPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $message
 * @property float|null $total_price
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $order
 * @property-read int|null $order_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder whereTotalPrice($value)
 */
class ClientOrder extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'delivery_id',
        'is_paid',
        'is_completed',
        'message',
        'total_price',
    ];

    public function delivery()
    {
        return $this->belongsTo(Delivery::class, 'delivery_id');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'client_id');
    }

}
