<?php

namespace App\Models\Rental;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public $guarded=['id'];

    public $dates = ['start_date', 'end_date'];

    public function vehicle()
    {
        return $this->hasOne(Vehicle::class, 'id');
        
    }

}
