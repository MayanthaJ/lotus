<?php

namespace App\Models\Accounts\Expense;

use App\Models\Accounts\Expense;
use Illuminate\Database\Eloquent\Model;

class AdvertisingExpense extends Model
{
    public $guarded = ['id'];

    public function expense()
    {
        return $this->hasOne(Expense::class, 'expense_id');
    }
}
