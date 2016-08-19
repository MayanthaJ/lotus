@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                @include('notifications._message')
                <h2>Edit Employee
                <br />
                    <small>Employee ID : {!! $employee->id !!}</small>
                </h2>
                <br />

                {!! Form::model($employee, ['method' => 'PATCH', 'action' => ['Employee\EmployeeController@update', $employee->id]]) !!}
                @include('admin.employee.partials._formPartial', ['btn' => 'Update Employee', 'password' => false])
                {!! Form::close() !!}

                <div class="col-sm-12 col-md-3">
                    
                </div>
            </div>
        </div>
    </div>
@endsection