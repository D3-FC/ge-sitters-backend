<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
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
