@extends('layouts.app')


@section('content')

    <h1>Advertising and Marketing</h1>

    <hr/>


    <div class="container">
        <div class="row">
            <div class="col-xs-12 com-md-3">
                @include('admin.advertisements.partials._custNav')
            </div>
            <div class="col-xs-12 com-md-6">

                <h1>Ad and Marketing Materials</h1>

                <ul>
                    @foreach ($advertisements as $ad)
                        <li>
                            <h3>{!! $ad->name !!}
                                <br />
                                {!! "Ad ID: " !!}
                                <small> {!! $ad->id !!}</small>
                                <br />
                                {!! "Ad Type: " !!}
                                <small> {!! $ad->type_id !!}</small>
                                <br />
                                <a href="/system/advertisements/{{ $ad->id }}/edit" class="btn btn-xs btn-primary">Edit this Ad</a>
                            </h3>
                            </h3>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-xs-12 com-md-3"></div>
        </div>
    </div>


    @stop
