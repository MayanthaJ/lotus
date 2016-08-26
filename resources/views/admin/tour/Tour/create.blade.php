@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h2>Add Tour</h2>
                @include('notifications._message')
                {!! Form::open(['action' => 'Tour\tourmanage\TourManageController@store']) !!}

                @include('admin.tour.Tour.partials._formPartial', ['btn' => 'Add Tour', 'password' => true, 'terminate' => false])
                {!! Form::close() !!}

            </div>

            <div class="col-sm-12 col-md-3">

            </div>
        </div>
    </div>
@endsection
