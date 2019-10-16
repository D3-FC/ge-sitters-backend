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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ads filter($params)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ads newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ads newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ads query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ads whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ads whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ads whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ads whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ads whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ads whereEndAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ads whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ads whereStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ads whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Ads extends Model
{
    protected $fillable = [
        'start_at',
        'end_at',
        'address',
        'description',
    ];

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
