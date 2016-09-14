<?php

namespace App\Models\Advertisements;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Advertisements\AdvertisementType
 *
 * @mixin \Eloquent
 */

class AdvertisementType extends Model
{
    //
    public $table = "advertisement_types";
    protected $guarded = ['id'];

}
