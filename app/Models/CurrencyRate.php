<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CurrencyRate
 *
 * @property int $id
 * @property float $rate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CurrencyRate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CurrencyRate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CurrencyRate query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CurrencyRate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CurrencyRate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CurrencyRate whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CurrencyRate whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CurrencyRate extends Model
{
    protected $fillable = ['rate'];
    //
}
