<?php

namespace App\Http\Controllers\Tour\tourmanage;

use App\Http\Controllers\Controller;
use App\Models\Employee\EmployeeType;
use App\Models\Package\Package;
use App\Models\Tour\Hotel;
use App\Models\Tour\Tour;
use Flash;
use Illuminate\Http\Request;
use Redirect;

class TourManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tours = Tour::all();
        return view('admin.tour.tour.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packages = Package::pluck('name', 'id');
        $hotels = Hotel::pluck('name','id');
        $guides = EmployeeType::with('employees')->where('name', 'guide')->first()->employees->pluck('name', 'id');


        return view('admin.tour.tour.create', compact('packages', 'hotels', 'guides'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'date' => 'required',
            'time' => 'required',
            'description' => 'required|min:10|max:1000',
            'package' => 'required',
            'Hotel' =>'required',
            'guide' => 'required'

        ]);


        Tour::create([
            'name' => $request->name,
            'departure' => $request->date,
            'time' => $request->time,
            'description' => $request->description,
            'package_id' => $request->package,
            'hotel_id' => $request->Hotel,
            'guide_id' => $request->guide
        ]);

        Flash::success("Tour added successfully");

        return Redirect::to('/system/tour/tourmanage');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tour = Tour::find($id);

        return view('admin.tour.tour.view', compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = Tour::findOrFail($id);

        $packages = Package::pluck('name', 'id');

        $hotels = Hotel::pluck('name', 'id');

        $guides = EmployeeType::with('employees')->where('name', 'guide')->first()->employees->pluck('name', 'id');

        return view('admin.tour.tour.edit', compact('tour', 'packages', 'hotels', 'guides'));
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
        $tours = Tour::findOrFail($id);

        $tours->name = $request->name;
        $tours->departure = $request->departure;
        $tours->time = $request->time;
        $tours->description = $request->description;
        $tours->package_id = $request ->package;
        


        if ($tours->save()) {
            Flash::success("Changes updated !");

        }


        return Redirect::to('/system/tour/tourmanage');

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
