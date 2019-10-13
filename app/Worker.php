<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Worker
 *
 * @property int $id
 * @property int|null $birthday
 * @property string|null $description
 * @property string|null $animal_relationship
 * @property float $meeting_price
 * @property int|null $has_card_payment
 * @property int|null $mobile_number_confirmed_at
 * @property int|null $passport_confirmed
 * @property int $min_child_age
 * @property int $max_child_age
 * @property int|null $sit_special_children
 * @property int|null $has_training_school
 * @property int|null $can_overwork
 * @property int|null $coords_x
 * @property int|null $coords_y
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereAnimalRelationship($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereCanOverwork($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereCoordsX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereCoordsY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereHasCardPayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereHasTrainingSchool($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereMaxChildAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereMeetingPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereMinChildAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereMobileNumberConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker wherePassportConfirmed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereSitSpecialChildren($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereUserId($value)
 * @mixin \Eloquent
 */
class Worker extends Model
{
    //
}
