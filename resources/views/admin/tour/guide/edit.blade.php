@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h2>Edit Guide </h2>
                @include('notifications._message')
                <br />
                <small>Guide ID: {!! $hotel->id!!}</small>

                {!! Form::model($hotel, ['method' => 'PATCH', 'action' => ['Tour\guide\GuideController@update', $guide->id]]) !!}
                @include('admin.tour.guide.partials._formPartial', ['btn' => 'Edit Guide', 'password' => true, 'terminate' => false])
                {!! Form::close() !!}

            </div>

            <div class="col-sm-12 col-md-3">

            </div>
        </div>
    </div>
@endsection


