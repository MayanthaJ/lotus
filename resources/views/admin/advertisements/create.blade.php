@extends('layouts.app')


@section('content')

    <h1>Create an Advertisement</h1>

    <hr/>

    {!! Form::open(['action' => 'Advertising\AdvertisingController@store', 'files' => true]) !!}

        <div class="form-control">
    {{--{!! Form::label('adId', 'Advertisements ID : ') !!}--}}
    {{--{!! Form::text('adId') !!}--}}
    {{--<br><br />--}}
    {!! Form::label('name','Advertisement Name : ') !!}
    {!! Form::text('name',null,['class' => 'form-control']) !!}
    <br><br />
    {!! Form::label('type', 'Advertisements') !!}
    {!! Form::text('type',null,['class' => 'form-control']) !!}



    {{--<br><br />--}}


    {!! Form::label('file','Upload Ad material here: ') !!}
    {!! Form::file('file') !!}
    {{--{!! Form::button('Upload') !!}--}}

    <br><br />

    {!! Form::submit('Add',null,['class' => 'btn btn-primary form-control']) !!}
    {!! Form::button('Back') !!}

        </div>

    {!! Form::close()!!}

    @if($errors->any())

        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>

            @endforeach

        </ul>

    @endif

    @stop


