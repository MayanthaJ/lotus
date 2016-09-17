@extends('layouts.MainLayOutNav')

@section('content')

        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h2>Add Tour</h2>
                @include('notifications._message')
                {!! Form::open(['action' => 'Tour\tourmanage\TourManageController@store']) !!}
                @include('admin.tour.tour.partials._formPartial', ['btn' => 'Add Tour', 'password' => true, 'terminate' => false])
                {!! Form::close() !!}

            </div>
        </div>

@endsection
