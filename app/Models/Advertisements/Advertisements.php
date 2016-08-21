<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisements extends Model
{

    protected $fillable =[

        'name',

        'type',

        'file',

        'created_at',

        'updated_at'



    ];


}
