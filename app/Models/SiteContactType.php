<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SiteContactType
 *
 * @property int $id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SiteContact[] $contact
 * @property-read int|null $contact_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContactType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContactType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContactType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContactType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContactType whereName($value)
 * @mixin \Eloquent
 */
class SiteContactType extends Model
{
    public $timestamps = false;

    public function contact()
    {
        return $this->hasMany(SiteContact::class,'type_id');
    }
}
