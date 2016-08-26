@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                @include('notifications._message')
                <h2>Vehicle List
                    <br />
                    <small><a href="{!! url('/system/rental/vehicle/create') !!}">Add Vehicle</a></small>
                </h2>

                <br />

                <table class="table table-responsive">
                    <tr>
                        <th>Vehicle ID</th>
                        <th>Name</th>
                        <th>Registered No</th>
                        <th>Manufactured Year</th>
                        <th>Color</th>
                        <th>Type</th>
                        <th>Body Type</th>
                        <th>Cost Per Day</th>
                        <th>Terminated</th>

                        <th></th>
                    </tr>

                    @foreach($vehicles as $vehicle)
                        <tr>
                            <td>{!! $vehicle->id !!}</td>
                            <td>{!! $vehicle->vehicle_name !!}</td>
                            <td>{!! $vehicle->reg_no !!}</td>
                            <td>{!! $vehicle->m_year !!}</td>
                            <td>{!! $vehicle->color !!}</td>
                            <td>{!! $vehicle->type !!}</td>
                            <td>{!! $vehicle->b_type !!}</td>
                            <td>{!! $vehicle->cost_per_day !!}</td>
                            <td>{!! $vehicle->terminated !!}</td>
                            <td></td>
                            <td>
                                <a href="{!! url('/system/rental/vehicle/'.$vehicle->id.'/edit') !!}" class="btn btn-default">
                                    view vehicle
                                </a>
                            </td>
                            <td>
                                <a href="{!! url('/system/rental/reservation/create',$vehicle->vehicle_name) !!}" class="btn btn-default">
                                    make reservation
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