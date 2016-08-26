@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h3>Guide Page</h3>
                @include('notifications._message')

                <small><a href="{!! url('/system/tour/guide/create') !!}">Add Guide</a></small>
                <br />
                <br />
                @if($guides->isEmpty())
                    <p><a href="{!! url('system/tour/guide/create') !!}">Add hotel</a></p>
                @else
                    <table class="table table-hover">
                        <tr>
                            <th>Name</th>

                        </tr>
                        @foreach($guides as $guide)
                            <tr>
                                <td>
                                    {!! $guide->name !!}
                                </td>

                                <td>


                                </td>

                                <td>
                                    <a class="btn btn-default"
                                       href="{!! url('/system/tour/guides/'.$guide->id.'/edit') !!}">Edit </a>
                                </td>
                                <td>
                                    <a class="btn btn-default"
                                       href="{!! url('/system/tour/guides/'.$guide->id.'/show') !!}">View </a>
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
