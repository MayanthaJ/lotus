<?php

namespace App\Models\Employee;

use App\User;
use Illuminate\Database\Eloquent\Model;

class EmployeeType extends Model
{
    public $fillable = ['id'];

    /**
     * Get the Employees associated with employee type
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employees()
    {
        return $this->hasMany(User::class, 'user_id');
    }
}
