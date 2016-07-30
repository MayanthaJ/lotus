<?php

namespace App\Http\Controllers\Employee;

use App\Models\Employee\OverTime;
use App\Models\Employee\TimeSheet;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TimeSheetController extends Controller
{
    public function checkIn(Request $request, $employee)
    {
        TimeSheet::create([
            'user_id' => $employee,
            'date' => Carbon::now()->toDateString(),
            'check_in' => Carbon::now(),
            'check_out' => null
        ]);
    }


    public function checkOut(Request $request, $employee)
    {
        $person = User::whereId($employee)->firstOrFail();

        $person->check_out = Carbon::now()->toDateString();

        if (($person->check_in - $person->check_out) > 8) {

            $day = Carbon::now()->toDateString();

            OverTime::create([
                'timesheet_id' => '' 
            ]);
        }

    }
}
