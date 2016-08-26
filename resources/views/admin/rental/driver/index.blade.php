@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h2>Driver List
                    <br />
                    <small><a href="{!! url('/system/rental/driver/create') !!}">Add Driver</a></small>
                </h2>
                @include('notifications._message')
                <div id="ajax-search">
                    {!! Form::text('search', null, ['class' => 'form-control']) !!}
                    {!! Form::submit('Search', ['class' => 'btn btn-xs btn-primary pull-right']) !!}
                </div>

                <br />

                <table class="table table-responsive">
                    <tr>
                        <th>Driver ID</th>
                        <th>Name</th>
                        <th>Basic Salary</th>
                        <th>NIC</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Availability</th>
                        <th></th>
                    </tr>

                    @foreach($users as $user)

                        <tr>
                            <td>{!! $user->id !!}</td>
                            <td>{!! $user->name !!}</td>
                            <td>{!! $user->basic !!}</td>
                            <td>{!! $user->nic !!}</td>
                            <td>{!! $user->age !!}</td>
                            <td>{!! $user->address !!}</td>
                            <td>{!! $user->terminated !!}</td>
                            <td></td>
                            <td>
                                <a href="{!! url('/system/rental/driver/'.$user->id.'/edit') !!}" class="btn btn-default">
                                    view driver
                                </a>
                            </td>
                            <td>
                                <a href="{!! url('/system/rental/'.$user->id.'/edit') !!}" class="btn btn-default">
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