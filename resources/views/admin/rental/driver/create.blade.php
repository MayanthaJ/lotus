@extends('layouts.app')
@section('styles')
    {!! Html::style('css/rental/example.css') !!}
@endsection

@section('content')
    <div class="col-sm-3"></div>
    <div class="col-sm-3">
        <h1>Rental System</h1>
        <h2>Add Driver</h2>
        @include('notifications._message')
        {!! Form::open(['action' => 'Rental\DriverController@store']) !!}
            @include('admin.rental.driver.partials._formPartial',['btn'=>'Add Driver','password'=>true])
        {!! Form::close() !!}
    </div>

@endsection