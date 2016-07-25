@extends('layouts.app')

@section('content')
    <h2>Edit Employee</h2>

    {!! Form::model($employee, ['method' => 'PATCH', 'action' => ['Employee\EmployeeController@update', $employee->id]]) !!}
        @include('employee.partials._formPartial', ['btn' => 'Update Employee'])
    {!! Form::close() !!}
@endsection