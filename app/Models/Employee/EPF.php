<?php

namespace App\Models\Employee;

use App\User;
use Illuminate\Database\Eloquent\Model;

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
