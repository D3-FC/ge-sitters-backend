<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Ads
 *
 * @property int $id
 * @property string $start_at
 * @property string $end_at
 * @property string $address
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int|null $client_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ad filter($params)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ad newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ad newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ad query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ad whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ad whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ad whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ad whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ad whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ad whereEndAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ad whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ad whereStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ad whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Ad extends Model
{
    protected $attributes = [
        'start_at'  =>'',
        'end_at'  =>'',
        'address'  =>'',
        'description'  =>'',
    ];

    public function scopeFilter(Builder $builder, array $params): Builder
   {
       $address = \Arr::get($params, 'address');
       $description = \Arr::get($params, 'description');
       $start_at = \Arr::get($params, 'start_at');
       $end_at = \Arr::get($params, 'end_at');

       if ($address) {
           $builder->where('address', 'LIKE', "%$address%");
       }
       if ($description) {
           $builder->where('description', 'LIKE', "%$description%");
       }
       if ($start_at) {
           $builder->where('start_at','>=', "$start_at");
       }
       if ($end_at) {
           $builder->where('end_at','<=', "$end_at");
       }
       return $builder;
   }

}
