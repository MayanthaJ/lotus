@extends('layouts.app')
@section('styles')
    {!! Html::style('customer/css/home.css') !!}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <a class="btn btn-default" href="/">Home</a>
            <a style="background-color: aliceblue;" class="btn btn-default" href="/system/customer">Customer</a>
            <a class="btn btn-default" href="/system/customer/create">Add Customer</a>
            <a class="btn btn-default" href="/system/customer/view">View</a>
        </div>
    </div>
@endsection