<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Employee\EmployeeTravel
 *
 * @property-read \App\Models\Employee\EmployeeTravelType $type
 * @mixin \Eloquent
 */
class EmployeeTravel extends Model
{
    public $guarded = ['id'];

    /**
     *  Get the type details of a employee travel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type()
    {
        return $this->hasOne(EmployeeTravelType::class, 'traveltype_id');
    }
}
