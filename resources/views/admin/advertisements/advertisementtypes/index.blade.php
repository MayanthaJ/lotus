@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 com-md-3">
                @include('admin.advertisements.partials._custNav')
            </div>
            <div class="col-xs-12 com-md-6">
                <h1>Ad and Marketing Material Types</h1>
                <ul>
                    @foreach ($types as $type)
                        <li>
                            <h3>{!! $type->name !!}
                                <br />
                                <small> {!! $type->description !!}</small>
                            </h3>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-xs-12 com-md-3"></div>
        </div>
    </div>
@stop
