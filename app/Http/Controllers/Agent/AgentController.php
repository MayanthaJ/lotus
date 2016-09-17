<?php

namespace App\Http\Controllers\Agent;

use App\Models\Agent\Agent;
use Illuminate\Http\Request;
use Flash;
use Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agent = Agent::all()->where('terminated', '=', '0');
        return view('admin.agent.index',compact('agent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'registeredNo'=>'required|numeric',
            'name' => 'required|min:3|max:15',
            'number' => 'required|numeric',
            'email'=>'required'
        ]);

        $agent=Agent::create([
            'registered'=>$request->registeredNo,
            'name' => $request->name,
            'number'=>$request->number,
            'email'=>$request->email
        ]);

        Flash::success("Succesfully Added !");
        return \Redirect::to('/system/agent/create');
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
        //
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
}
