@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <a class="btn btn-default" href="/">Home</a>
            <a style="background-color: aliceblue;" class="btn btn-default" href="/system/ticket">Ticket</a>
            <a class="btn btn-default" href="/system/ticket/create">Add Ticket</a>
            <a class="btn btn-default" href="/system/ticket/view">View</a>
            <a class="btn btn-default" href="/system/ticket/view">Edit</a>
        </div>
    </div>
@endsection