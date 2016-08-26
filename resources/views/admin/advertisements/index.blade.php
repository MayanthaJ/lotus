@extends('layouts.app')


@section('content')

    <h1>Advertising and Marketing</h1>

    <hr/>

    {!! Form::open()!!}

    {!! Form::button('Create') !!}

    {!! Form::button('Search') !!}

    {!! Form::button('Types') !!}


    {!! Form::close() !!}

    <div class="container">
        <div class="row">
            <div class="col-xs-12 com-md-3">

            </div>
            <div class="col-xs-12 com-md-6">

                <h1>Ad and Marketing Material Types</h1>
                <ul>
                    @foreach ($advertisements as $ad)
                        <li>
                            <h3>{!! $ad->name !!}
                                <br />
                                {!! "Ad ID:" !!}
                                <small> {!! $ad->id !!}</small>
                            </h3>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-xs-12 com-md-3"></div>
        </div>
    </div>


    @stop
