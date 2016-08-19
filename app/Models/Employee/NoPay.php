<?php

namespace App\Models\Employee;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Employee\NoPay
 *
 * @property-read \App\User $employee
 * @mixin \Eloquent
 */
class NoPay extends Model
{
    public $guarded = ['id'];

    /**
     * Get the employee related to a no pay record
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function employee()
    {
            return $this->hasOne(User::class, 'id');
    }
}
