@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <h2>Employee Attendance<br /></h2>
                @if($attendances->isEmpty())
                    <p>You have no attendance</p>
                @else
                    <ul>
                        @foreach($attendances as $attendance)
                            <li>Attended Date : <strong>{!! $attendance->day->toDateString() !!}</strong>
                                <ul>
                                    <li><strong>Checked IN : {!! $attendance->check_in->toTimeString() !!}</strong></li>
                                    <li><strong>Check OUT : {!! $attendance->check_out->toTimeString() !!}</strong></li>
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection