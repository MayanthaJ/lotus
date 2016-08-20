<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Employee\EmployeeTravelType
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Employee\EmployeeTravel[] $travels
 * @mixin \Eloquent
 */
class EmployeeTravelType extends Model
{
    public $guarded = ['id'];

    /**
     * get the all travels of a travel type
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function travels()
    {
        return $this->hasMany(EmployeeTravel::class, 'traveltype_id');
    }
}
