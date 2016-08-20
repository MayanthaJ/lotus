<?php

namespace App\Models\Employee;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Employee\PayeTax
 *
 * @property-read \App\User $employee
 * @mixin \Eloquent
 */
class PayeTax extends Model
{
    public $guarded = ['id'];

    /**
     * Get user associated with a paye tax
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function employee()
    {
        return $this->hasOne(User::class, 'id');
    }
}
