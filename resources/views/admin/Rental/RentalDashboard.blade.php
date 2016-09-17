@extends('layouts.MainLayOutNav')
@section('content')

    <div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="view-header">
                <div class="pull-right text-right" style="line-height: 14px">
                    <small><br><br> <span class="c-white"></span></small>
                </div>
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-shield"></i>
                </div>
                <div class="header-title">
                    <h3 class="m-b-xs">Rental System</h3>
                </div>
            </div>
            <hr>
        </div>
      </div>

      <div class="row">
        <br/>
          {{--/panel for reservation--}}
          <p class="col-md-12">
              <p>Reservations</p>
          <div class="panel-body">
              <a class="btn btn-success btn-lg" href="{!! url('system/rental/reservation/create') !!}">Make a Reservation</a>
              <a class="btn btn-danger btn-lg" href="{!! url('system/rental/reservation') !!}">List of Reservations</a>
          </div>
          </p>


          {{--panel for Vehicle--}}
          <p class="col-md-12">
              <p>Vehicles</p>
          <div class="panel-body">
              <a class="btn btn-success btn-lg" href="{!! url('system/rental/vehicle/create') !!}">Add Vehicle</a>
              <a class="btn btn-danger btn-lg" href="{!! url('system/rental/vehicle') !!}">View Vehicle</a>
          </div>

          </p>


          {{--panel for Driver--}}
          <p class="col-md-12">
              <p>Drivers</p>
              <div class="panel-body">
                  <a class="btn btn-success btn-lg" href="{!! url('system/rental/driver/create') !!}" >Add a Driver</a>
                  <a class="btn btn-danger btn-lg" href="{!! url('system/rental/driver') !!}">View Driver</a>
              </div>
          </p>


          {{--panel for Accounts--}}
          <p class="col-md-12">
              <p>Accounts Management</p>
              <div class="panel-body">
                  <a class="btn btn-success btn-lg" href="{!! url('system/rental/income')!!}">Income</a>
                  <a class="btn btn-danger btn-lg"  href="{!! url('system/rental/expense')!!}">Expenses</a>
                  <a class="btn btn-primary btn-lg"  href="{!! url('system/rental/profit')!!}">Profit</a>
              </div>
          </p>

      </div>
  </div>
@endsection