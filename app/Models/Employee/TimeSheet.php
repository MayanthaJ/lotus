<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

class TimeSheet extends Model
{
    /**
     * Get the overtimes related a timesheet
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function overtime()
    {
        return $this->hasMany(OverTime::class, 'timesheet_id');
    }
}
