@extends('layouts.app')


@section('content')

    <h1>Feedback</h1>

    <hr/>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 com-md-3">
                @include('admin.advertisements.partials._custNav')
            </div>
            <div class="col-xs-12 com-md-6">
                <h1>Ad and Marketing Material Types</h1>
                <ul>
                    @foreach ($feedback as $feedback)
                        <li>
                            <h3> {!! $feedback->topic !!}
                                <br />
                                <small> {!! $feedback->name !!}</small>
                                <a href="/system/advertisements/feedback/{{ $feedback->id }}" class="btn btn-xs btn-primary">View Feedback</a>
                            </h3>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-xs-12 com-md-3"></div>
        </div>
    </div>
@stop
