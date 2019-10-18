<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\NewsService
 *
 * @property int $id
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int|null $to_id
 * @property int|null $from_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsService newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsService newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsService query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsService whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsService whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsService whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsService whereFromId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsService whereToId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsService whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsService filter($params)
 * @mixin \Eloquent
 */
class NewsService extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $attributes = [
        'description'  =>'',
    ];

    public function scopeFilter(Builder $builder,array $params):Builder
    {
        $description = \Arr::get($params,"description");

        if($description){
            $builder->where("description","LIKE","%$description%");
        }

        //$builder->where('description','>',3)->paginate(2);

        return $builder;
    }
}
