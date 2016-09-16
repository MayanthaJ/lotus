@extends('layouts.MainLayOutNav')
@section('styles')
    {!! Html::style('css/rental/example.css') !!}
@endsection

@section('content')
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <h1>Rental System</h1>
        <h2>Make A Reservation</h2>
        @include('notifications._message')
        {!! Form::open(['action' => 'Rental\ReservationController@store']) !!}
            @include('admin.rental.reservation.partials._formPartial',['btn'=>'Add Reservation'])
        {!! Form::close() !!}
    </div>

@endsection

