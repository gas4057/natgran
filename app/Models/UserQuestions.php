<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserQuestions
 *
 * @property int $id
 * @property string|null $nickname
 * @property string $first_name
 * @property string $last_name
 * @property string $contact_phone
 * @property string $contact_email
 * @property string $contact_message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions whereContactEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions whereContactMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions whereContactPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class UserQuestions extends Model
{
    protected $fillable = [
        '_token',
        'first_name',
        'last_name',
        'contact_phone',
        'contact_phone',
        'contact_email',
        'contact_message',
    ];
}
