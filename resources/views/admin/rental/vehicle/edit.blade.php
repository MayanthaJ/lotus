@extends('layouts.app')
@section('styles')
    {!! Html::style('css/rental/example.css') !!}
@endsection

@section('content')
    <div class="col-sm-3"></div>
    <div class="col-sm-3">
        <h1>Rental System</h1>
        <h2>Update Vehicle</h2>
        @include('notifications._message')
        {!! Form::model($driver, ['method' => 'PATCH', 'action' => ['Rental\DriverController@update', $vehicle->id]]) !!}
        @include('admin.rental.driver.partials._formPartial',['btn'=>'Edit Driver'])
        {!! Form::close() !!}
    </div>

@endsection