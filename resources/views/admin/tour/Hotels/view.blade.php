@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <table class="table table-responsive">
                <tr>
                    <th>Name</th>
                    <td>{!! $hotel->name !!}</td>


                </tr>

                <tr>
                    <th>Phone</th>
                    <td>{!! $hotel->phone !!}</td>


                </tr>

                <tr>
                    <th>Email</th>
                    <td>{!! $hotel->email !!}</td>


                </tr>

                <tr>
                    <th>City</th>
                    <td>{!! $hotel->city !!}</td>


                </tr>

                <tr>
                    <th>Total Expenses</th>
                    <td>{!! $hotel->expenses !!}</td>


                </tr>

                <tr>
                    <th>Created At</th>
                    <td>{!! $hotel->created_at !!}</td>


                </tr>








            </table>
        </div>
    </div>
@endsection


