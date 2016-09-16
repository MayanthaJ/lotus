<?php

namespace App\Models\Tour;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Tour\Tour
 *
 * @property integer $id
 * @property integer $package_id
 * @property string $name
 * @property string $departure
 * @property string $time
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Tour\Tour whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Tour\Tour wherePackageId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Tour\Tour whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Tour\Tour whereDeparture($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Tour\Tour whereTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Tour\Tour whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Tour\Tour whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Tour\Tour whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property integer $hotel_id
 * @property integer $guide_id
 * @property integer $coustomer_count
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Tour\Tour whereHotelId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Tour\Tour whereGuideId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Tour\Tour whereCoustomerCount($value)
 */
class Tour extends Model
{
    public $table = 'tours';

    public $guarded = ['id'];

}
