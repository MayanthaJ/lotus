@extends('layouts.app')

@section('content')

    <h1>Update</h1>

    <hr/>

    {!! Form::model($type,['method' => 'PATCH', 'action' => ['Advertisements\AdvertisementTypesController@store', $type->id]]) !!}

    <div class="form-control">

        {!! Form::label('name', 'Type Name : ') !!}
        {!! Form::text('name',null,['class' => 'form-control']) !!}
        <br><br />

        {!! Form::label('description','Description : ') !!}
        {!! Form::text('description',null,['class' => 'form-control']) !!}
        <br><br/>

        {!! Form::submit('Update',['class' => 'btn btn-primary form-control']) !!}
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