<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Client
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int|null $user_id
 * @property-read \App\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Client newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Client query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Client whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Client whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Client whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\User $client
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Client filter($params)
 * @property-read \App\Contract $contracts
 * @property-read int|null $contracts_count
 * @property-read \App\UserFavorite $favorite
 */
class Client extends Model
{

    public function scopeFilter(Builder $builder, array $params): Builder
    {
        $userId = \Arr::get($params, 'user_id');

        if ($userId) {
            $builder->where('user_id', 'LIKE', "$userId%");
        }

        return $builder;
    }


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function contracts()
    {
        return $this->hasMany('App\Contract');
    }

    public function favorite()
    {
        return $this->hasOne('App\UserFavorite');
    }
}
