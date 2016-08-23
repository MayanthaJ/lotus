<?php

namespace App\Http\Controllers\Rental;

use App\Models\Rental\Vehicle;
use Flash;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();

        return view('admin.rental.vehicle.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rental.vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validate the request object
        $this->validate($request, [
            'vehicle_name' => 'required|min:3|max:15',
            'm_year' => 'required|min:4|max:4',
            'reg_no' => 'required|max:50',
            'color' => 'required|min:3|max:10',
            'type' => 'required',
            'b_type' => 'required',
        ]);

        // Vehicle object
        Vehicle::create([
            'vehicle_name' => $request->vehicle_name,
            'm_year' => $request->m_year,
            'reg_no' => $request->reg_no,
            'color' => $request->color,
            'type' => $request->type,
            'b_type' => $request->b_type,
            'terminated' => ($request->has('terminated')) ? 1 : 0,
        ]);

        // Sends a success message
        Flash::success("Vehicle Added Successfully !");

        // return to a url
        return Redirect::to('/system/rental/vehicle');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::findOrFail($id);

        return view('admin.rental.vehicle.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {

        // validate the request object
        $this->validate($request, [
            'vehicle_name' => 'required|min:3|max:15',
            'm_year' => 'required|min:4|max:4',
            'reg_no' => 'required|max:50',
            'color' => 'required|min:3|max:10',
            'type' => 'required',
            'b_type' => 'required',
        ]);

        $vehicle = Vehicle::findOrFail($id);

        $vehicle->vehicle_name = $request->vehicle_name;
        $vehicle->reg_no = $request->reg_no;
        $vehicle->m_year = $request->m_year;
        $vehicle->color = $request->color;
        $vehicle->type = $request->type;
        $vehicle->b_type = $request->b_type;
        $vehicle->cost_per_day = $request->cost_per_day;
        $vehicle->terminated = ($request->has('terminated')) ? 1 : 0;

        if($vehicle->save()) {
            Flash::success("Vehicle updated successfully");
        } else {
            Flash::error("An Error occured !");
        }

        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
    }
}
