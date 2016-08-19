<?php

namespace App\Models\Employee;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Employee\EPF
 *
 * @property-read \App\User $employee
 * @mixin \Eloquent
 */
class EPF extends Model
{

    /**
     * Get the user associated with EPF
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function employee()
    {
        return $this->hasOne(User::class, 'user_id');
    }

}
