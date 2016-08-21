@extends('layouts.app')


@section('content')

    <h1>Advertising and Marketing</h1>

    <hr/>

    {!! Form::open()!!}

    {!! Form::button('Create') !!}

    {!! Form::button('Search') !!}

    {!! Form::button('Back') !!}


    {!! Form::close() !!}


    @stop
