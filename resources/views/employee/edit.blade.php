@extends('layouts.app')

@section('content')
    @include('notifications._message')
    <h2>Edit Employee</h2>

    {!! Form::model($employee, ['method' => 'PATCH', 'action' => ['Employee\EmployeeController@update', $employee->id]]) !!}
        @include('employee.partials._formPartial', ['btn' => 'Update Employee', 'password' => true])
    {!! Form::close() !!}
@endsection