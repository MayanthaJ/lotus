@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h2>Employee List</h2>

                <br />

                <table class="table table-responsive">
                    <tr>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>System Limit</th>
                        <th>Job Role</th>
                        <th></th>
                    </tr>
                    @foreach($employees as $employee)
                        <tr>
                            <td>{!! $employee->id !!}</td>
                            <td>{!! $employee->name !!}</td>
                            <td>
                                <ul>
                                    @foreach($employee->admin as $type)
                                        <li>{!! $type->type !!} &nbsp;</li>
                                    @endforeach
                                </ul>
                            </td>

                            <td>
                                <ul>
                                    @foreach($employee->employee_type as $role)
                                        <li> {!! $role->name !!} &nbsp; </li>
                                    @endforeach
                                </ul>
                            </td>

                            <td>
                                <a href="{!! url('/system/employee/'.$employee->id.'/edit') !!}" class="btn btn-default">
                                    view employee
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>
            <div class="col-sm-12 col-md-3"></div>
        </div>
    </div>
@endsection