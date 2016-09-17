@extends('layouts.MainLayOutNav')

@section('content')

    <div class="row">
        <div class="col-sm-12 col-md-9">
            <h3>Tour Page</h3>
            @include('notifications._message')

            <small><a href="{!! url('/system/tour/tourmanage/create') !!}">Add Tour</a></small>
            <br/>
            <br/>
            @if($tours->isEmpty())
                <p><a href="{!! url('system/tour/tourmanage/create') !!}">Add Tour</a></p>
            @else
                <table class="table table-hover">
                    <tr>
                        <th>Name</th>

                    </tr>
                    @foreach($tours as $tour)
                        <tr>
                            <td>
                                {!! $tour->name !!}
                            </td>

                            <td>


                            </td>

                            <td>
                                <a class="btn btn-default"
                                   href="{!! url('/system/tour/tourmanage/'.$tour->id.'/edit') !!}">Edit </a>
                            </td>

                            <td>
                                <a class="btn btn-default"
                                   href="{!! url('/system/tour/tourmanage/'.$tour->id.'/') !!}">View</a>
                            </td>

                        </tr>
                    @endforeach
                </table>
            @endif

        </div>

    </div>

@stop
