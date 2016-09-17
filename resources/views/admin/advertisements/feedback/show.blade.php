@extends('layouts.MainLayOutNav')


@section('content')

    <div class="col-md-3"></div>
    <div class="col-md-6">

        <h1>Feedback</h1>

        <hr/>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 com-md-3">
                    @include('admin.advertisements.partials._custNav')
                </div>
                <div class="col-xs-12 com-md-6">

                    <ul>

                            <li>
                                <h3>{!! "Subject :" !!} {!! $feedback->subject !!}</h3>
                                    <br />
                                    {!! "Name :" !!}
                                    {!! $feedback->name !!}
                                    <br />
                                    {!! "Contact : " !!}
                                    {!! $feedback->contact !!}
                                    <br />
                                    {!! "Comment : " !!}
                                    {!! $feedback->comment !!}
                                    <br />
                                    <a href="/system/advertisements/feedback/" class="btn btn-xs btn-primary">Back</a>

                            </li>

                    </ul>
                </div>
                <div class="col-xs-12 com-md-3"></div>
            </div>
        </div>
    </div>
@stop
