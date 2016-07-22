@extends('layouts.mainlayout')

<!-- adds content to the content section in mainlayout.blade.php file -->
@section('content')
    <h2>Test Body</h2>

    <!-- create a sample form -->
    {!! Form::open(['method' => 'POST', 'action' => 'Advertisement\AdvertisementController@store']) !!}
        {!! Form::label('name') !!}
        {!! Form::text('name') !!}

        {!! Form::submit('Add') !!}
    {!! Form::close() !!}
@endsection