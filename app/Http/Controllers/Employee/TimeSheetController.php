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

        $currentTime = Carbon::now();

        $today = $currentTime->toDateString();

        $person = User::findOrFail($employee);

        // get the time sheet of the day if any exists
        $timeSheet = $person->timesheet->where('day', $today)->first();

        // quick check for timeSheet existence
        if ($timeSheet != null) {

            // update the check_out time
            $person->check_out = Carbon::now();

            //dd($timeSheet->check_in->format('h:i:s'));

            $otTimeAmount = $timeSheet->check_in->diffInHours($currentTime->format('h:i:s'), false);

            if ($otTimeAmount >= 8) {

                    $holiday = Holidays::whereStartDay($today)->first();

                if ($holiday != null || !$holiday->isEmpty()) {

                    if ($otTimeAmount >= 10) {
                        // inform to admin/management
                    }

                    // get ot type
                    $ot = OverTime::create([]);

                }

                // save the check_out time
                if ($timeSheet->save()) {
                    echo "Okay";
                } else {
                    echo "Check_out failed";
                }

            } else {

                echo "TimeSheet not found !";
            }

        }

    }
}
