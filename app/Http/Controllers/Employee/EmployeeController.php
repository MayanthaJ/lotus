<?php

namespace App\Http\Controllers\Employee;

use App\Http\Requests\UserRequestValidator;
use App\Models\Employee\AdminTypes;
use App\Models\Employee\EmployeeType;
use App\User;
use Auth;
use Carbon\Carbon;
use File;
use Flash;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;

class EmployeeController extends Controller
{
    /**
     * EmployeeController constructor.
     */
    public function __construct()
    {
        // enables updates
        $this->middleware('auth');

        $this->middleware('adminOrManager', ['except' => 'show']);

        // stops self updates
        $this->middleware('selfUpdate' ,['only' => 'update']);

        // stop peeking at others details
        $this->middleware('peekDetails', ['only' => ['show', 'getLoans']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // get all the employees in the database
        $employees = User::all();

        // return the view with all compacted data
        return view('admin.employee.index', compact('employees'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // get all type names of the admin types
        $type_lists = AdminTypes::pluck('type', 'id');

        // get all the employee types
        $employee_type = EmployeeType::pluck('name', 'id');

        // return with compacted data
        return view('admin.employee.create', compact('type_lists', 'employee_type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequestValidator|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequestValidator $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3'
        ]);

        // create the employee
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

        // create the directory for a employee
        if(!File::isDirectory(public_path().'/employees/'.$employee->id)) {
            File::makeDirectory(public_path().'/employees/'.$employee->id, true, true);
        }

        // sync the access types
        $employee->admin()->sync($request->type_lists);

        // sync the access employee types
        $employee->employee_type()->sync($request->employee_types);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get the employee model
        $employee = User::findOrFail($id);

        // get all admin types
        $type_lists = AdminTypes::pluck('type');

        // get all employee types
        $employee_types = EmployeeType::pluck('name');

        // return the view
        return view('admin.employee.show', compact('employee', 'type_lists', 'employee_types'));
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

        $type_lists = AdminTypes::pluck('type', 'id');

        $employee_type = EmployeeType::pluck('name', 'id');

        return view('admin.employee.edit', compact('employee', 'type_lists', 'employee_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserRequestValidator|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequestValidator $request, $id)
    {
        $this->middleware('selfUpdate');
        // get the employee model
        $employee = User::findOrFail($id);

        // set the normal employee columns
        $employee->name = $request->name;
        $employee->lastname = $request->lastname;
        $employee->nic = $request->nic;
        $employee->gender = $request->gender;
        $employee->basic = $request->basic;

        // since we have only checkbox it's only available in the dom if
        // its ticked, so we have to check for the existence
        if ($request->gender == '0') {
            $employee->gender = 0;
        } else {
            $employee->gender = 1;
        }

        // if terminated date is checked set the date
        if ($request->has('terminated')) {
            $employee->terminated = 1;
            $employee->terminated_date = Carbon::now();
        } else {
            $employee->terminated = 0;
            $employee->terminated_date = null;
        }

        // sync the user types
        $employee->admin()->sync($request->type_lists);

        // sync the employee types
        $employee->employee_type()->sync($request->employee_types);

        // save and exit
        if ($employee->save()) {
            Flash::success("Changes updated !");
        }

        // return to the original page
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
        // get employee model
        $employee = User::findOrFail($id);

        // delete the content of the employee if required
        File::deleteDirectory(public_path().'/employees/'.$employee->id);

        // make the notification
        if($employee->delete()) {
            Flash::success('Employee removed successfully');
        } else {
            Flash::error('Employee removal failed');
        }

        // return to the all employees page
        return Redirect::to('employee');
    }


    /*
     * Employee Extra Details
     */

    public function getSalarySlip()
    {
        $salaryslips = User::findOrFail(Auth::id())->salaryslip;

        return view('admin.employee.stats.salaryslip', compact('salaryslips'));
    }

    public function getOverTime()
    {
        $overtimes = User::find(Auth::id())->overtimes;

        return view('admin.employee.stats.overtime', compact('overtimes'));

    }

    public function getLoans()
    {
        $loans = User::find(Auth::id())->loans;

        return view('admin.employee.stats.loans', compact('loans'));
    }

    public function getLeaves()
    {

        $leaves = User::find(Auth::id())->leaves;

        return view('admin.employee.stats.leaves', compact('leaves'));

    }

    public function getAllowances()
    {
        $allowances = User::find(Auth::id())->leaveAllowance;

        return view('admin.employee.stats.leaveAllowance', compact('allowances'));
    }

    public function getTravel()
    {
        $travels = User::find(Auth::id())->travels;

        return view('admin.employee.stats.travel', compact('travels'));
    }

}
