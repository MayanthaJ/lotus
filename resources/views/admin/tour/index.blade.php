@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-3"></div>
            <div class="col-xs-12 col-md-6">
                <h3>Tour / Hotel / Guides Management</h3>
                <br />
                <br />
                <a href="{!! url('/system/tour/guide') !!}" class="btn btn-block btn-primary">Manage Guides</a>
                <a href="{!! url('/system/tour/hotels') !!}" class="btn btn-block btn-primary">Mnage Hotels</a>
                <a href="{!! url('/system/tour/tourmanage') !!}" class="btn btn-block btn-primary">Tour Manage</a>
            </div>
            <div class="col-xs-12 col-md-3"></div>
        </div>
    </div>
@endsection