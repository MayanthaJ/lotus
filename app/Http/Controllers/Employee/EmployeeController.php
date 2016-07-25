<?php

namespace App\Http\Controllers\Employee;

use App\Http\Requests\UserRequestValidator;
use App\Models\Employee\AdminTypes;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('adminOrManager');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "lol";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequestValidator|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequestValidator $request)
    {

        $employee = User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'nic' => $request->nic,
            'basic' => $request->basic,
            'gender' => ($request->has('gender')) ? 1 : 0,
            'terminated' => 0,
            'hired_date' => Carbon::now(),
            'terminated_date' => null
        ]);

        $employee->admin()->sync($request->type_lists);


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
        $employee = User::find($id);

        $tag_lists = AdminTypes::pluck('id')->all();

        return view('employee.edit', compact('employee', 'tag_lists'));
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
