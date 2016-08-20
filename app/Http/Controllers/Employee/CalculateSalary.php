<?php

namespace App\Http\Controllers\Employee;

use App\Models\Employee\SalarySlip;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CalculateSalary extends Controller
{
    public function calculateSalaray($employeeID)
    {

        $user = User::findOrFail($employeeID);

        $basicSalary = $user->basic;

        $epf = ($basicSalary * 8) / 100;

        $payeTax = 0;
        if ($basicSalary <= 62500) {

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

        $currentMonth = Carbon::now()->startOfMonth();

        $currentYear = Carbon::now()->year;

        \DB::enableQueryLog();

        $timesheets = $user->timesheet()->with('overtime')->where('day', '>=', $currentMonth)->get();

        $travels = $user->travels()->where('date', '>=', $currentMonth)->get();

        $leaves = $user->leaves()->where('time', '>=', $currentYear)->get();

        $loans = $user->loans()->where('isOver', '!=', 1)->get();

        $advances = $user->advance()->where('month', '>=', $currentMonth)->get();

        $otPay = 0;
        foreach ($timesheets as $timesheet) {
            foreach ($timesheet->overtime as $overtime) {
                $otPay += $overtime->pay;
            }
        }

        $loanDeductions = 0;
        foreach ($loans as $loan) {
            $loanDeductions += $loan->decrement;
        }

        $noPay = 0;
        if ($leaves->count() >= 35) {

            // if leaves are greater than 35, then check and get the count of no pay days
            $numOfDays = $user->nopay()->get()->count();

            // grab the days count
            $daysinMonth = Carbon::now()->daysInMonth;

            // pay per day
            $typicalPPD = $basicSalary / $daysinMonth;

            // no pay amount
            $noPay = $typicalPPD * $numOfDays;
        }

        $travelPay = 0;
        foreach ($travels as $travel) {
            $travelPay += $travel->amount;
        }

        $advancePay = 0;
        foreach ($advances as $advance) {
            $advancePay += $advance->amount;
        }

        $payOfMonth = ($basicSalary + $otPay + $travelPay) - ($loanDeductions + $advancePay + $noPay + $epf + $payeTax);

        //dd($basicSalary, $otPay, $travelPay, $loanDeductions, $advancePay, $noPay, $epf, $payeTax);

        $salarySlip = SalarySlip::create([
            'user_id' => $user->id,
            'month' => date('Y-m-d'),
            'pay' => $payOfMonth
        ]);


    }
}
