<?php

namespace App\Http\Controllers\Rental;

use App\Models\Customer\Customer;
use App\Models\Employee\EmployeeType;
use App\Models\Rental\Reservation;
use App\Models\Rental\Vehicle;
use App\User;
use Illuminate\Http\Request;
use flash;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $reservations = Reservation::all();


        //dd($reservations[1]->start_date->diffInDays($reservations[1]->end_date, false));

        return view('admin.rental.reservation.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        \DB::enableQueryLog();

        $vehicles = Vehicle::pluck('vehicle_name', 'id');

        $drivers = EmployeeType::where('name', 'driver')->with('employees')->first()->employees->pluck('name', 'id');

       // dd(\DB::getQueryLog());

        return view('admin.rental.reservation.create', compact('vehicles', 'drivers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validate the request object
        $this->validate($request, [
            'destination' => 'required|min:3|max:50',
            //'payment' => 'required|min:2|max:10',
            'start_date' => 'required|date',
            'end_date' => 'required|date',

        ]);


        // Reservation object
        Reservation::create([
            'destination' => $request->destination,
            //'payment' => $request->payment,
            'vehicle_id' => $request->vehicle_id,
            'driver_id' => $request->driver_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,

            // 'terminated' => ($request->has('terminated')) ? 1 : 0,
        ]);

        // Sends a success message
        \Flash::success("Reservation Added Successfully !");

        // return to a url
        return \Redirect::to('/system/rental/reservation');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);

        $drivers = EmployeeType::where('name', 'driver')->with('employees')->first()->employees->pluck('name', 'id');

        $vehicles = Vehicle::pluck('vehicle_name', 'id');

        return view('admin.rental.reservation.edit', compact('reservation', 'drivers', 'vehicles'));
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
        // validate the request object
        $this->validate($request, [
            'destination' => 'required|min:3|max:50',
            'start_date' => 'required|date',
            'end_date' => 'required|date',

        ]);

        //updating the object
        $reservation = Reservation::findOrFail($id);

        $reservation->start_date = $request->start_date;
        $reservation->end_date = $request->end_date;
        $reservation->driver_id = $request->driver_id;
        $reservation-> vehicle_id= $request-> vehicle_id;
        $reservation->payment = $request->payment ;
        $reservation-> destination= $request->destination ;

        if($reservation->save()) {
            \Flash::success("Reservation Details updated successfully");

        } else {
            \Flash::error("An Error occured !");
        }

        return \Redirect::to('/system/rental/reservation/');

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

    /*
     *
     * */
    public  function reservation($id){
        $customer = Customer::findOrFail($id);
        $reservation = Reservation::findOrFail($id);
        $drivers = EmployeeType::where('name', 'driver')->with('employees')->first()->employees->pluck('name', 'id');
        $vehicles = Vehicle::pluck('vehicle_name', 'id');
        return view('admin.Rental.reservation.allocate',compact('customer','drivers','reservation','vehicles'));
    }
}
