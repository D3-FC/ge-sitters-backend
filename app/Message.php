<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Message
 *
 * @property int $id
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int|null $to_id
 * @property int|null $from_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereFromId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereToId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message filter($params)
 */
class Message extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $attributes = [
        'description'  =>'',
        'created_at'  =>'',
    ];

    public function scopeFilter(Builder $builder,array $params):Builder
    {
        $description = \Arr::get($params,"description");
        $created_at = \Arr::get($params,"created_at");

        if($description){
            $builder->where("description","LIKE","%$description%");
        }
        if($created_at){
            $builder->where('created_at','=', "$created_at");

        }
        return $builder;
    }
}
