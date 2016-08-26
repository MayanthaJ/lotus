@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h2>Edit Hotel </h2>
                @include('notifications._message')
                <br />
                <small>Hotel ID: {!! $hotel->id!!}</small>

                {!! Form::model($hotel, ['method' => 'PATCH', 'action' => ['Tour\hotels\HotelController@update', $hotel->id]]) !!}
                @include('admin.tour.Hotels.partials._formPartial', ['btn' => 'Edit Hotel', 'password' => true, 'terminate' => false])
                {!! Form::close() !!}

            </div>

            <div class="col-sm-12 col-md-3">

            </div>
        </div>
    </div>
@endsection


