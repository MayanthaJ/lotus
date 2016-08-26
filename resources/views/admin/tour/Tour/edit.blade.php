@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">

                         <h2>Edit Tour </h2>
                         @include('notifications._message')
                         <br />
                         <small>Tour ID: {!! $tour->id!!}</small>

                         {!! Form::model($tour, ['method' => 'PATCH', 'action' => ['Tour\tourmanage\TourManageController@update', $tour->id]]) !!}
                         @include('admin.tour.Tour.partials._formPartial', ['btn' => 'Edit Tour', 'password' => true, 'terminate' => false])
                         {!! Form::close() !!}

            </div>

            <div class="col-sm-12 col-md-3">

            </div>
        </div>
    </div>
@endsection


