@extends('layouts.app')


@section('content')

    <h1>Create an Advertisement</h1>
   @include('notifications._message')

    <hr/>

    {!! Form::open(['action' => 'Advertisements\AdvertisingController@store', 'files' => true]) !!}

    <div class="form-control">

        {!! Form::label('name','Advertisement Name : ') !!}
        {!! Form::text('name',null,['class' => 'form-control']) !!}
        <br><br/>
        {!! Form::label('type_id', 'Advertisement Type : ') !!}
        {!! Form::select('type_id', $type_id, null, ['class' => 'form-control']) !!}

        <br><br />


        {!! Form::label('file','Upload Ad material here: ') !!}
        {!! Form::file('file') !!}


        <br><br/>

        {!! Form::submit('Add',['class' => 'btn btn-primary form-control']) !!}
        {!! Form::button('Back') !!}

    </div>

    {!! Form::close()!!}



@stop


