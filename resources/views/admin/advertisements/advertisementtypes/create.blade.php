@extends('layouts.app')


@section('content')

    <h1>Create an Advertisement Type</h1>
        @include('notifications._message')

    <hr/>

    {!! Form::open(['action' => 'Advertisements\AdvertisementTypesController@store', 'files' => true]) !!}

    <div>

        {!! Form::label('name','Type Name : ') !!}
        {!! Form::text('name',null,['class' => 'form-control']) !!}
        <br><br/>

        {!! Form::label('description','Description : ') !!}
        {!! Form::text('description',null,['class' => 'form-control']) !!}
        <br><br/>


        {!! Form::submit('Add',['class' => 'btn btn-primary form-control']) !!}
        {!! Form::button('Back',['class' => 'btn btn-primary form-control']) !!}

    </div>

    {!! Form::close()!!}


@stop


