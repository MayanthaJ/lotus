@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="/system/customer">Customer</a>
            </div>
            <div class="col-md-2">
                <a href="/system/customer/view">View Customer</a>
            </div>
            <div class="col-md-2">
                <a href="/system/customer/view">Update Customer</a>
            </div>
            <hr />
            <div class="col-sm-12 col-md-12">
                @include('notifications._message')
                <h2>Edit Employee
                    <br />
                    <small>Employee ID : {!! $customer->id !!}</small>
                </h2>
                <br />

                {!! Form::model($customer, ['method' => 'PATCH', 'action' => ['Customer\CustomerController@update', $customer->id]]) !!}
                @include('admin.customer.partials._formPartial', ['btn' => 'Update Customer',])
                {!! Form::close() !!}

                <div class="col-sm-12 col-md-3">

                </div>
            </div>
        </div>
    </div>
@endsection