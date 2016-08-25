<?php

namespace App\Models\Accounts\Expense;

use Illuminate\Database\Eloquent\Model;

class SalaryExpense extends Model
{
    public $guarded = ['id'];

    public function expense()
    {
        return $this->hasOne(SalaryExpense::class, 'expense_id');
    }
}
