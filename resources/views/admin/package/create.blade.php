@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <a class="btn btn-default" href="/">Home</a>
            <a class="btn btn-default" href="/system/package">Package</a>
            <a style="background-color: aliceblue;" class="btn btn-default" href="/system/package/create">Add</a>
        </div>
    </div>
    <br />
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6"></div>
            <div class="col-sm-6 col-md-6">
                <h2>Add Package</h2>
                @include('notifications._message')
                {!! Form::open(['action' => 'Package\PackageController@store']) !!}
                @include('admin.package.partials._formPartial',['btn' => 'Add Package'])
                {!! Form::close() !!}
            </div>


        </div>
    </div>
@endsection