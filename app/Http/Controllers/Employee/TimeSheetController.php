<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee\OverTime;
use App\Models\Employee\TimeSheet;
use App\Models\General\Calender;
use App\Models\General\Holidays;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        // get the current time
        $currentTime = Carbon::now();

        // get the date in a string format for querying
        $today = $currentTime->toDateString();

        // get the employee who is checking_out
        $person = User::findOrFail($employee);

        // get the time sheet of the day if any exists
        $timeSheet = $person->timesheet->where('day', $today)->first();

        // quick check for timeSheet existence
        if ($timeSheet != null) {

            // update the check_out time
            $timeSheet->check_out = $currentTime;

            // calc the amount of time between check_in time and current time
            $otTimeAmount = $timeSheet->check_in->diffInHours($currentTime, false);

            if ($otTimeAmount >= 8) {

                // get the holiday, if today is a holiday
                $holiday = Holidays::whereStartDay($today)->first();

                // if the current day is not a holiday
                if ($holiday != null || !$holiday->isEmpty()) {

                    // create the ot card
                    OverTime::create([
                        'timesheet_id' => $timeSheet->id,
                        'over_time_type_id' => 1, // <- since not a holiday
                        'hours' => $otTimeAmount,
                        'pay' => ($person->hour_rate + $holiday->otType->rate) * $otTimeAmount
                    ]);

                } else {

                    // create the ot card
                    OverTime::create([
                        'timesheet_id' => $timeSheet->id,
                        'over_time_type_id' => $holiday->overtimetype_id,
                        'hours' => $otTimeAmount,
                        'pay' => ($person->hour_rate + $holiday->otType->rate) * $otTimeAmount
                    ]);
                }

                // report unusual activity
                if ($otTimeAmount >= 10) {
                    // todo : make a notice board
                    // inform to admin/management
                }

                // save the check_out time
                if ($timeSheet->save()) {
                    echo "Check out complete";
                } else {
                    echo "Check_out failed";
                }

            } else {

                echo "No worked for get OT";

                if($timeSheet->save()) {
                    echo "Check out complete";
                } else {
                    echo "Check out failed";
                }

            }

        } else {
            echo "Couldn't find the timesheet";
        }

    }
}
