<?php

namespace App\Models\Accounts;

use App\Models\Accounts\Expense\AdvertisingExpense;
use App\Models\Accounts\Expense\SalaryExpense;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public $guarded = ['id'];


    public function salary()
    {
        return $this->hasMany(SalaryExpense::class, 'expense_id');
    }

    public function advertising()
    {
        return $this->hasMany(AdvertisingExpense::class, 'expense_id');
    }
}
