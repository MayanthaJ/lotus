<?php

namespace App\Models\Advertisements;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Advertisements\Advertisements
 *
 * @mixin \Eloquent
 */
class Advertisements extends Model
{

    //
    protected $fillable =[

        'name',

        'type',

        'file',

        'created_at',

        'updated_at'



    ];

}
