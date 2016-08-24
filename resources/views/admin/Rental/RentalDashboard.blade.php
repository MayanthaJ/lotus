@extends('layouts.app')
@section('content')
  <div class="container">
      <div class="jumbotron">
          <h1 align="center">Rental System</h1>
      </div>

      {{--/panel for reservation--}}
      <div class="panel panel-default">

          <div class="panel-heading">Reservations</div>
          <div class="panel-body">
              <a class="btn btn-success btn-lg" href="{!! url('system/rental/reservation/create') !!}">Make a Reservation</a>
              <a class="btn btn-danger btn-lg" href="{!! url('system/rental/reservation') !!}">List of Reservations</a>
              <a class="btn btn-primary btn-lg"  href="{!! url('system/rental/reservation') !!}">More</a>
          </div>
      </div>

      {{--panel for Vehicle--}}
      <div class="panel panel-default">
          <div class="panel-heading">Vehicles</div>
          <div class="panel-body">
              <a class="btn btn-success btn-lg" href="{!! url('system/rental/vehicle/create') !!}">Add a Vehicle</a>
              <a class="btn btn-danger btn-lg" href="{!! url('system/rental/vehicle') !!}">View Vehicle</a>
              <a class="btn btn-primary btn-lg" href="{!! url('system/rental/vehicle') !!}" >More</a>
          </div>
      </div>


      {{--panel for Driver--}}
      <div class="panel panel-default">
          <div class="panel-heading">Drivers</div>
          <div class="panel-body">
              <a class="btn btn-success btn-lg" href="{!! url('system/rental/driver/create') !!}" >Add a Driver</a>
              <a class="btn btn-danger btn-lg" href="{!! url('system/rental/driver') !!}">View Driver</a>
              <a class="btn btn-primary btn-lg">More</a>
          </div>
      </div>

      {{--panel for Settings--}}
      <div class="panel panel-default">
          <div class="panel-heading">Settings</div>
          <div class="panel-body">
              <a class="btn btn-success btn-lg">X</a>
              <a class="btn btn-danger btn-lg">X</a>
              <a class="btn btn-primary btn-lg">X</a>
          </div>
      </div>
  </div>

  </div>

@endsection