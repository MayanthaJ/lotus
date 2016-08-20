<?php

namespace App\Models\Employee;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Employee\LeaveAllowance
 *
 * @property-read \App\User $employee
 * @mixin \Eloquent
 */
class LeaveAllowance extends Model
{
    /**
     * Get the leave allowance of a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function employee()
    {
        return $this->hasOne(User::class, 'user_id');
    }
}
