<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $mobile
 * @property int|null $notify_sms
 * @property int|null $notify_email
 * @property int|null $notify_cabinet
 * @property string|null $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereNotifyCabinet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereNotifyEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereNotifySms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User filter($params)
 * @property string|null $user_city
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUserCity($value)
 * @property-read \App\Client $client
 */
class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'first_name',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $attributes = [
      'first_name'  =>'',
      'name'  =>'',
      'last_name'  =>'',
      'mobile'  =>'',
      'user_city'  =>'',
      'notify_sms'  =>false,
      'notify_email'  =>false,
      'notify_cabinet'  =>false,
      'email'  =>'',
      'password'  =>'',
    ];
    /**
     * @var array|string|null
     */

    public function scopeFilter(Builder $builder, array $params): Builder
    {
        $firstName = \Arr::get($params, 'first_name');
        $lastName = \Arr::get($params, 'last_name');

        if ($firstName) {
            $builder->where('first_name', 'LIKE', "$firstName%");
        }
        if ($lastName) {
            $builder->where('last_name', 'LIKE', "$lastName%");
        }

        return $builder;
    }

    public function client()
    {
        return $this->hasOne('App\Client');
    }

}
