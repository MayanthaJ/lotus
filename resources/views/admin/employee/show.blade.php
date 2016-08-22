@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <h2>Employee View <br />
                <small>employee id : {!! $employee->id !!}</small>
                </h2>
                <br />

                <table class="table table-bordered table-responsive">
                    <tr>
                        <th>Item</th>
                        <th>Detail</th>
                    </tr>

                    <tr>
                        <td>FullName : </td>
                        <td>{!! $employee->name !!} {!! $employee->lastname !!}</td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>{!! $employee->email !!}</td>
                    </tr>

                    <tr>
                        <td>NIC</td>
                        <td>{!! $employee->nic !!}</td>
                    </tr>

                    <tr>
                        <td>Basic Salary</td>
                        <td>{!! $employee->basic !!}</td>
                    </tr>

                    <tr>
                        <td>Hourly rate</td>
                        <td>{!! $employee->hour_rate !!}</td>
                    </tr>

                    <tr>
                        <td>Gender</td>
                        <td>{!! ($employee->gender == true) ? "Male" : "Female" !!}</td>
                    </tr>

                    <tr>
                        <td>Hired Date</td>
                        <td>{!! $employee->hire_date !!}</td>
                    </tr>

                    @if($employee->terminated == true)
                        <tr>
                            <td>Termination date</td>
                            <td>{!! $employee->terminated_date !!}</td>
                        </tr>
                    @endif

                </table>
            </div>
            <div class="col-xs-12 col-md-3">
                <div class="bar-panel">
                    <a href="{!! url('system/employee/'.$employee->id.'/stats/salary-slips') !!}">Salary Slips</a>
                    <br />
                    <a href="{!! url('system/employee/'.$employee->id.'/stats/overtimes') !!}">Over Time</a>
                    <br />
                    <a href="{!! url('system/employee/'.$employee->id.'/stats/leaves') !!}">Leaves</a>
                    <br />
                    <a href="{!! url('system/employee/'.$employee->id.'/stats/attendance') !!}">Attendance</a>
                    <br />
                    <a href="{!! url('system/employee/'.$employee->id.'/stats/travel') !!}">Travel</a>
                    <br />
                    <a href="{!! url('system/employee/'.$employee->id.'/stats/loans') !!}">Loans</a>
                </div>
            </div>
        </div>
    </div>
@endsection