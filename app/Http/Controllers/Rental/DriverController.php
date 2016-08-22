<?php

namespace App\Http\Controllers\rental;

use App\User;

use Flash;
use App\Http\Controllers\Controller;
use Redirect;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin.rental.driver.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rental.driver.create');
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
            'name' => 'required|min:3|max:15',
            'lastname' => 'required|min:3|max:15',
            'email' => 'required|max:50',
            'password' => 'required|min:3|max:10',
           
        ]);

        // Vehicle object
        User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'age' => $request->age,
            'address' => $request->address,
            'email' => $request->email,
            'password' => $request->password,
            'nic' => $request->nic,
            'basic' => $request->basic,
           // 'terminated' => ($request->has('terminated')) ? 1 : 0,
        ]);


        // Sends a success message
        Flash::success("Driver Added Successfully !");

        // return to a url
        return Redirect::to('/system/rental/driver');
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
        $driver = User::findOrFail($id);

        return view('admin.rental.driver.edit', compact('driver'));
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
            'name' => 'required|min:3|max:15',
            'lastname' => 'required|min:5|max:15',
            'email' => 'required|max:50',
            'nic' => 'required',
            'basic' => 'required',

        ]);

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->nic = $request->nic;
        $user->basic = $request->basic;
        $user->terminated = ($request->has('terminated')) ? 1 : 0;

        if($user->save()) {
            Flash::success("Driver Details updated successfully");
        } else {
            Flash::error("An Error occured !");
        }

        return Redirect::back();
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
}
