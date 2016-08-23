@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3"></div>
            <div class="col-sm-12 col-md-6">
                <h3 style="font-family: Cambria Math; text-align: center">Lotus Travels - Admin Dashboard</h3>

                <br/>

                <div class="panel panel-default">
                    <div class="panel-heading">Hello, {!! Auth::user()->name !!}</div>

                    <div class="panel-body">
                        @if(Auth::user()->admin)
                            What you are allowed for ,
                            <ul>
                                @foreach(Auth::user()->admin as $adminTypes)
                                    <li>{!! $adminTypes->type !!}</li>
                                @endforeach
                            </ul>
                        @else

                        @endif
                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-md-3"></div>
        </div>
    </div>
@endsection