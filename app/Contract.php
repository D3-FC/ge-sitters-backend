<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Contract
 *
 * @property int $id
 * @property int $child_count
 * @property float $price
 * @property string $description
 * @property float $coords_x
 * @property float $coords_y
 * @property string $payment_method
 * @property string|null $accepted_at
 * @property string|null $declined_at
 * @property string|null $start_at
 * @property string|null $end_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int|null $client_id
 * @property int|null $worker_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereAcceptedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereChildCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereCoordsX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereCoordsY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereDeclinedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereEndAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereWorkerId($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract filter($params)
 */
class Contract extends Model
{
    protected $attributes = [

    ];


    public function scopeFilter(Builder $builder, array $params): Builder
    {
        $childCount = \Arr::get($params, 'child_count');

        if ($childCount) {
            $builder->where('child_count', 'LIKE', "$childCount%");
        }

        return $builder;
    }
}
