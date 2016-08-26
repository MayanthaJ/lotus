@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-3"></div>
            <div class="col-xs-12 col-md-6">
                <h3>QuickBook Records</h3>
                <a href="{!! url('/system/accounts/quickboook/create') !!}">Add to QuickBook</a>
                <br />
                <ul>
                    @foreach($quickbooks as $quickbook)
                        <li>QuickBook invoice : #1500{!! $quickbook->id !!}
                            <ul>
                                <li><strong>Amount : {!! $quickbook->amount !!}</strong></li>
                                <li><strong>Description : {!! $quickbook->description !!}</strong></li>
                            </ul>
                            <a href="{!! url('/system/accounts/quickbook/'.$quickbook->id.'/edit') !!}">Edit</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-xs-12 col-md-3"></div>
        </div>
    </div>
@endsection