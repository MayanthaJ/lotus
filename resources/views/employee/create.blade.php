@extends('layouts.app')

@section('content')
    <h2>Add Employee</h2>

    {!! Form::open(['action' => 'Employee\EmployeeController@store']) !!}
        @include('employee.partials._formPartial', ['btn' => 'Add button'])
    {!! Form::close() !!}


@endsection
