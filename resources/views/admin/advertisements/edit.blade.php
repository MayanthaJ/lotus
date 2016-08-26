@extends('layouts.app')

@section('content')

    <h1>Update</h1>

    <hr/>

    {!! Form::model($ad,['method' => 'PATCH', 'action' => ['Advertisements\AdvertisingController@update', $ad->id], 'files' => true]) !!}

    <div class="form-control">

        {!! Form::label('name', 'Advertisement Name : ') !!}
        {!! Form::text('name',null,['class' => 'form-control']) !!}
        <br><br />
        {!! Form::label('type_id', 'Advertisement Type : ') !!}
        {!! Form::select('type_id', $type_id, null, ['class' => 'form-control']) !!}



        <br><br />


        {!! Form::label('file','Upload new Ad material here: ') !!}
        {!! Form::file('file') !!}


        <br><br />

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