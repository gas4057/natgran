<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SiteContact
 *
 * @property int $id
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $address
 * @property string|null $skype
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContact query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContact whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContact wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContact whereSkype($value)
 * @mixin \Eloquent
 * @property int $type_id
 * @property string $contact
 * @property-read \App\Models\SiteContactType $type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContact whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContact whereTypeId($value)
 */
class SiteContact extends Model
{
    public $timestamps = false;
    public $table = 'site_contacts';

    public function type()
    {
        return $this->belongsTo(SiteContactType::class);
    }

}
