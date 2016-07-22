<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

class OverTime extends Model
{
    /**
     * Get the timesheet related to an over time
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function timesheet()
    {
        return $this->hasOne(TimeSheet::class, 'timesheet_id');
    }
}
