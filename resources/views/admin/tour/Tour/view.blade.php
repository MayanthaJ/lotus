@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <table class="table table-responsive">
                <tr>
                    <th>Name</th>
                    <td>{!! $tour->name !!}</td>


                </tr>

                <tr>
                    <th>Departure Date</th>
                    <td>{!! $tour->departure !!}</td>


                </tr>

                <tr>
                    <th>Departure Time</th>
                    <td>{!! $tour->time !!}</td>


                </tr>

                <tr>
                    <th>Description</th>
                    <td>{!! $tour->description !!}</td>


                </tr>


                <tr>
                    <th>Created At</th>
                    <td>{!! $tour->created_at !!}</td>


                </tr>








            </table>
        </div>
    </div>
@endsection


