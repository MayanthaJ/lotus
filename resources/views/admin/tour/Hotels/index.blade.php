@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h3>Hotel Page</h3>
                @include('notifications._message')

                <small><a href="{!! url('/system/tour/hotels/create') !!}">Add Hotel</a></small>
                <br />
                <br />
                @if($hotels->isEmpty())
                    <p><a href="{!! url('system/tour/hotels/create') !!}">Add hotel</a></p>
                @else
                    <table class="table table-hover">
                        <tr>
                            <th>Name</th>

                        </tr>
                        @foreach($hotels as $hotel)
                            <tr>
                                <td>
                                    {!! $hotel->name !!}
                                </td>

                                <td>


                                </td>

                                <td>
                                    <a class="btn btn-default"
                                       href="{!! url('/system/tour/hotels/'.$hotel->id.'/edit') !!}">Edit </a>
                                </td>

                                <td>
                                    <a class="btn btn-default"
                                       href="{!! url('/system/tour/hotels/'.$hotel->id.'/show') !!}">View</a>
                                </td>

                            </tr>
                        @endforeach
                    </table>
                @endif

            </div>

            <div class="col-sm-12 col-md-3"></div>
        </div>
    </div>
@stop
