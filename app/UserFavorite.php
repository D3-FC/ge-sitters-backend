<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\UserFavorite
 *
 * @property int $id
 * @property int|null $is_favorite
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int|null $to_id
 * @property int|null $from_id
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserFavorite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserFavorite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserFavorite query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserFavorite whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserFavorite whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserFavorite whereFromId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserFavorite whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserFavorite whereIsFavorite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserFavorite whereToId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserFavorite whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int|null $client_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserFavorite whereClientId($value)
 * @property-read \App\Client|null $client
 */
class UserFavorite extends Model
{


    public function client()
    {
        return $this->belongsTo('App\Client');
    }
}
