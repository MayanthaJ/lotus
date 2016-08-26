<?php

namespace App\Http\Controllers\Tour\guide;

use App\Models\Employee\EmployeeType;
use App\Models\Tour\Guide;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Flash;
use Redirect;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guides = EmployeeType::with('employees')->where('name', 'guide')->first()->employees;
        return view('admin.tour.guide.index', compact('guides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tour.guide.create');
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
            'lastname' => 'required|min:3|max:50',
            'email' =>'required|min:3|max:50|email',
            'password' => 'required|min:5',
            'nic' => 'required|regex:/^[0-9]{9}[vVxX]$/',
            'basic' => 'required|numeric',
            'gender'=> 'required',
        ]);
        User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
            'nic' => $request->nic,
            'basic' => $request->basic,
            'gender'=> $request->gender,
        ]);

        Flash::success("Guide added successfully");

        return Redirect::to('/system/tour/guide');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guide =User::find($id);

        return view('admin.tour.guide.view',compact('guide'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guide = User::findOrFail($id);

        return view('admin.tour.guide.edit',compact('guide'));
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
        $guide = User::findOrFail($id);

        $guide->name = $request->name;
        $guide->lastname = $request->lastname;
        $guide->email = $request->email;
        $guide->password = $request->password;
        $guide->nic = $request->nic;
        $guide->basic = $request->basic;
        $guide->hired_date = $request->hired_date;
        $guide->gender=$request->gender;

        if ($guide->save()) {
            Flash::success("Changes updated !");

        }


        return Redirect::to('/system/tour/guide');
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
