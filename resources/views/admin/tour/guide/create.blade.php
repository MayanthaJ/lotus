@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h2>Add Guide</h2>
                @include('notifications._message')
                {!! Form::open(['action' => 'Tour\guide\GuideController@store']) !!}

                @include('admin.tour.guide.partials._formPartial', ['btn' => 'Add Guide', 'password' => true, 'terminate' => false])
                {!! Form::close() !!}

            </div>

            <div class="col-sm-12 col-md-3">

            </div>
        </div>
    </div>
@endsection
