<?php

namespace App\Http\Controllers\Employee\General;

use App\Models\Employee\AdvancePayment;
use App\Models\Employee\Leave;
use App\Models\Employee\LeaveTypes;
use App\Models\Employee\Loan;
use App\Models\Employee\LoanType;
use App\User;
use Flash;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;

class Additional extends Controller
{
    public function getAddLoan()
    {
        $loan_name_lists = LoanType::pluck('name', 'id');

        $employee_names = User::pluck('name', 'id');

        return view('admin.employee.various.loans.create', compact('loan_name_lists', 'employee_names'));
    }

    public function postAddLoan(Request $request)
    {
        $this->validate($request, [
            'loan_name_lists' => 'required',
            'amount' => 'required'
        ]);

        Loan::create([
            'loan_type_id' => $request->loan_name_lists,
            'user_id' => $request->employee_names,
            'amount' => $request->amount,
        ]);

        Flash::success('Loan added to user !');

        return Redirect::back();
    }

    public function getLeaveView()
    {
        $leave_type_lists = LeaveTypes::pluck('name', 'id');

        $employee_names = User::pluck('name', 'id');

        return view('admin.employee.various.loans.create', compact('leave_type_lists', 'employee_names'));
    }

    public function postAddLeave(Request $request)
    {

        $this->validate($request, [
            'leave_type_lists' => 'required',
            'employee_names' => 'required',
            'reason' => 'required'
        ]);

        Leave::create([
            'leave_type_lists' => $request->leave_type_lists,
            'employee_names' => $request->employee_names,
            'reason' => $request->reason
        ]);

        Flash::success("Leave added to employee");

        return Redirect::back();

    }

    public function getAdvancePayView()
    {
        $employee_names = User::pluck('name', 'id');

        return view('admin.employee.various.advance.create', compact('employee_names'));
    }

    public function postAdvancePayView(Request $request)
    {
        $this->validate($request, [
            'employee_names' => 'required',
            'amount' => 'required'
        ]);

        AdvancePayment::create([
            'user_id' => $request->employee_names,
            'amount' => $request->amount,
            'month' => date('Y-m-d')
        ]);

        Flash::success('Advance payment added to employee');

        return Redirect::back();

    }
}
