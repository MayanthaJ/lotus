<?php

namespace App\Http\Controllers\Customer;

use App\Models\Customer\Customer;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$customer=customer::all();
        //dd($customer);
        //return view('admin.customer.index');
        return view('admin.customer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.customer.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
        $this->validate($request, [
            'fname' => 'required|min:3|max:15',
            'sname' => 'required|min:3|max:15',
            'lname' => 'required|min:3|max:15',
            'otherName' => 'required|min:3|max:15',
            'age' => 'required|numeric'
        ]);

        $customer = Customer::create([
            'fname' => $request->fname,
            'sname' => $request->sname,
            'lname' => $request->lname,
            'otherName' => $request->otherName,
            'age' => $request->age,
            'dob' => $request->dob,
            'number' => $request->phoneNumber,
            'nic' => $request->nic,
            'passport' => $request->passportId,
            'address1' => $request->address1,
            'address2' => $request->address2
        ]);


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

    /**
     * Veiw List of customers with edit links.
     */
    public function view()
    {
        $customers=Customer::all();
        return view('admin.customer.view',compact('customers'));
    }
}
