<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Delivery
 *
 * @property int $id
 * @property string $city
 * @property string $address
 * @property float $price
 * @property int $is_warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Delivery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Delivery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Delivery query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Delivery whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Delivery whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Delivery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Delivery whereIsWarehouse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Delivery wherePrice($value)
 * @mixin \Eloquent
 */
class Delivery extends Model
{
    public $timestamps = false;

}
