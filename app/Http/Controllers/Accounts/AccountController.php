<?php

namespace App\Http\Controllers\Accounts;

use App\Http\Controllers\Controller;
use App\Models\Accounts\Income;
use App\Models\Accounts\Income\ReservationIncome;
use App\Models\Rental\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomes = Income::all();

        return view('admin.accounts.index', compact('incomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $income = Income::whereMonth($id)->first();

        return view('admin.accounts.show', compact('income'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $income = Income::whereMonth($id)->first();

        return view('admin.accounts.edit', compact('income'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function testCalcs()
    {
        $this->calculateIncomePerDay();
    }

    /**
     * Calculate the income of the day
     */
    private function calculateIncomePerDay()
    {

        $carbon = Carbon::now();

        $today = $carbon->toDateString();

        $inComeOfTheDay = 0;

        // create a income model instance
        // just like creating a row in the income table
        $income = Income::create([
            'month' => $today,
            'income' => 0,
        ]);


        // go through reservations and get all reservation created at today (from $today variable)
        $reservations = Reservation::whereDate('created_at', '=', $today)->get();


        // we recieved an collection (means an array of table rows) .. so it is required to loop the
        // go get the values of each one of them ... so we are using a foreach loop
        foreach ($reservations as $reservation) {

            // while looping here we create an new row in the reservations_income table with the details of the
            // $reservation(looped variable)
            // ::create method is a static method in the Parent Model Class, it just creates a row
            // in the relavent table .... in our case its reservation_income
            ReservationIncome::create([
                'income_id' => $income->id,
                'reservation_id' => $reservation->id,
                'amount' => $reservation->payment,
                'date' => $today
            ]);

            // and we add what ever the income to main income variable
            $inComeOfTheDay = $inComeOfTheDay + $reservation->payment;
        }

        // get All tours
        /*    $tours = Tour::whereDate('created_at', '=', $today)->get();


            foreach ($tours as $tour) {
                // same thing as the previous foreach
                TourIncome::create([
                    'tour_id' => $tour->id,
                    'income_id' => $income->id,
                    // here we are just calling the package[method] (relationship in the Tour model) to get the package
                    // associated with tour.... then gets its ID
                    'amount' => $tour->package->price,
                    'date' => $today
                ]);
            }
        */

        // since we have calucated the income for the day
        // we are saving it to the database
        // like updating the rows$
        $income->income = $inComeOfTheDay;

        $income->save();

    }



    private function calculateExpensePerDay()
    {
        // salary , ads,
    }

}
