@extends('layouts.app')


@section('content')
    <div class="col-md-3"></div>
    <div class="col-md-6">

        <h1>Send us your feedback!</h1>
        @include('notifications._message')

        <hr/>
        <div class="col-xs-12 com-md-3">
            @include('admin.advertisements.partials._custNav')
        </div>

        <div class="col-xs-12 com-md-6">

            {!! Form::open(['action' => 'Advertisements\FeedbackController@store', 'files' => true]) !!}

            <br><br />

            <div>

                {!! Form::label('subject','Subject/Topic : ') !!}
                {!! Form::text('subject',null,['class' => 'form-control']) !!}
                <br><br/>

                {!! Form::label('name','Name : ') !!}
                {!! Form::text('name',null,['class' => 'form-control']) !!}
                <br><br/>

                {!! Form::label('contact','Contact : ') !!}
                {!! Form::text('contact',null,['class' => 'form-control']) !!}

                <br><br/>
                {!! Form::label('email','E-mail : ') !!}
                {!! Form::text('email',null,['class' => 'form-control']) !!}


                {!! Form::label('comment','Comment : ') !!}
                {!! Form::textarea('comment',null,['class' => 'form-control']) !!}
                <br><br/>


                {!! Form::submit('Submit',['class' => 'btn btn-primary form-control']) !!}
                <br><br />
                <a href="/system/advertisements/feedback" class="btn btn-primary form-control">Back</a>

            </div>

            {!! Form::close()!!}

        </div>

    </div>

@stop
