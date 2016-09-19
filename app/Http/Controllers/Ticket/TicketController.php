<?php

namespace App\Http\Controllers\Ticket;

use App\Models\Agent\Agent;
use App\Models\Customer\Customer;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ticket.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agents =Agent::where('terminated', 0)->pluck('name', 'id');

        return view('admin.ticket.create',compact('agents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Functional Validation
        $this->validate($request, [
            'fname' => 'required|min:3|max:20',
            'sname' => 'required|min:3|max:20',
            'lname' => 'required|min:3|max:20',
            'contact' => 'required',
            'nic' => 'required|regex:/^[0-9]{9}[vVxX]$/',
            'from' => 'required',
            'to' => 'required',
            'departure' => 'required|after:now',
            'quantity' => 'required|numeric',
            'agent'=>'required',
            'amount'=>'required|numeric'
        ]);

        $customer=Customer::create(
            [
                'fname' => $request->fname,
                'sname' => $request->sname,
                'lname' => $request->lname,
                'otherName' => $request->otherName,
                'number'=>$request->contact,
                'nic'=>$request->nic,
            ]
            //work to done
        );

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
