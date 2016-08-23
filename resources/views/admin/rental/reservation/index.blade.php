@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                @include('notifications._message')
                <h2>Reservation List
                    <br/>
                    <small><a href="{!! url('/system/rental/reservation/create') !!}">Add Reservation</a></small>
                </h2>

                <br/>

                <table class="table table-responsive">
                    <tr>
                        <th>Reservation ID</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Vehicle</th>
                        <th>Driver Name</th>
                        <th></th>
                    </tr>

                    @foreach($reservations as $reservation)

                        <tr>
                            <td>{!! $reservation->id !!}</td>
                            <td>{!! $reservation->start_date!!}</td>
                            <td>{!! $reservation->end_date !!}</td>
                            <td>{!! $reservation->vehicle_id!!}</td>
                            <td>{!! $reservation->driver_id !!}</td>
                            <td></td>
                            <td>
                                <a href="{!! url('/system/rental/reservation/'.$reservation->id.'/edit') !!}"
                                   class="btn btn-default">
                                    view reservation
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>
            <div class="col-md-12"></div>
        </div>
    </div>
@endsection