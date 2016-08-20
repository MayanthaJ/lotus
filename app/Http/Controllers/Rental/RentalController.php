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
        return view('admin.rental.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rental.create');
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
            'm_year' => 'required',
            'reg_no' => 'required',
            'added_date' => 'required',
            'color' => 'required',
            'type' => 'required',
            'b_type' => 'required',
        ]);

        // Vehicle object
        $vehicle = Vehicle::create([
            'vehicle_name' => $request->vehicle_name,
            'm_year' => $request->m_year,
            'reg_no' => $request->reg_no,
            'added_date' => $request->added_date,
            'color' => $request->color,
            'type' => $request->type,
            'b_type' => $request->b_type,
        ]);

        // Sends a success message
        Flash::success("Vehicle Added Successfully !");

        // return to a url
        return Redirect::to('/system/rental');

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
        //
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
        //
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
