@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                @include('notifications._message')
                <h2>Edit Employee
                    <br />
                    <small>Employee ID : {!! $customer->id !!}</small>
                </h2>
                <br />

                {!! Form::model($customer, ['method' => 'PATCH', 'action' => ['Employee\EmployeeController@update', $customer->id]]) !!}
                @include('admin.customer.partials._formPartial', ['btn' => 'Update Customer', 'password' => false, 'terminate' => true])
                {!! Form::close() !!}

                <div class="col-sm-12 col-md-3">

                </div>
            </div>
        </div>
    </div>
@endsection