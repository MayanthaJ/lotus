@extends('layouts.app')
@section('style')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6"></div>
            <div class="col-sm-6 col-md-6">
                <h2>Add Customer</h2>
                @include('notifications._message')
                {!! Form::open(['action' => 'Customer\CustomerController@store']) !!}
                @include('admin.customer.partials._formPartial',['btn' => 'Add Customer', 'password' => true])
                {!! Form::close() !!}
            </div>


        </div>
    </div>
@endsection