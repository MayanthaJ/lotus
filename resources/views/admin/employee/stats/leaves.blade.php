@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <h2>Employee Leaves<br /></h2>
                @if($leaves->isEmpty())
                    <p>You have took no leaves</p>
                @else
                    <ul>
                        @foreach($leaves as $leave)
                            <li>Leave Date : {!! $leave->time !!}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection