<?php

namespace App\Http\Controllers\Employee;

use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CalculateSalary extends Controller
{
    public function calculateSalaray()
    {
        $user = User::find(Auth::id());

        $basicSalary = $user->basic;

        $epf = ($basicSalary * 8) / 100;

        $payeTax = 0;
        if($basicSalary <= 62500) {

            // No payeetax
        } else {
            switch (true) {
                case ($basicSalary > 62500):
                    $payeTax = $basicSalary * 0.25;
                    break;
                case ($basicSalary >= 104167):
                    $payeTax = ($basicSalary * 8) / 100;
                    break;
                case ($basicSalary >= 145833):
                    $payeTax = ($basicSalary * 12) / 100;
                    break;
                case ($basicSalary >= 187500):
                    $payeTax = ($basicSalary * 16) / 100;
                    break;
                default:
                    $payeTax = 0;
            }
        }

        //todo : set payetax and epf

        $currentMonth = Carbon::now()->startOfMonth();

        $payOfMonth = 0;

        \DB::enableQueryLog();

        $timesheets = $user->timesheet()->with('overtime')->where('day', '>=', $currentMonth)->get();

        $overtimes = $timesheets->overtime;

        $travels = $user->travels()->where('date', '>=', $currentMonth)->get();

        $leaves = $user->leaves()->where('time', '>=', $currentMonth)->get();

        $loans = $user->loans()->where('isOver', '!=', 1)->get();


        $otPay = 0;
        foreach ($overtimes as $overtime) {
            $otPay += $overtime->pay;
        }

        $loanDeductions = 0;
        foreach ($loans as $loan) {
            $loanDeductions += $loan->decrement;
        }

        $noPay = 0;
        if($leaves->count() >= 35) {

            // if leaves are greater than 35, then check and get the count of no pay days
            $noPay = $user->nopay()->get()->count();
        }

        $travelPay = 0;
        foreach ($travels as $travel) {
            $travelPay += $travel->amount;
        }



    }
}
