@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                @include('notifications._message')
                <h2>Reservation List
                    <br />
                    <small><a href="{!! url('/system/rental/reservation/create') !!}">Add Reservation</a></small>
                </h2>

                <br/>

                <table class="table table-responsive">
                    <tr>
                        <th>Reservation ID</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>No of Days</th>
                        <th>Total Cost</th>
                        <th>Driver Name</th>
                        <th>Destination</th>
                        <th></th>
                    </tr>

                    @foreach($reservations as $reservation)
                        <?php

                        $x = \App\User::find($reservation->driver_id);

                        ?>
                        <tr>
                            <td>{!! $reservation->id !!}</td>
                            <td>{!! $reservation->start_date!!}</td>
                            <td>{!! $reservation->end_date !!}</td>
                            <td>{!! $reservation->start_date->diffInDays($reservation->end_date, false) !!}</td>
                            <td>{!! $reservation->start_date->diffInDays($reservation->end_date, false)*1200 !!}</td>
                            <td>{!! $x->name !!}</td>
                            <td>{!! $reservation->destination !!}</td>
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