@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-3"></div>
            <div class="col-xs-12 col-md-6">
                <h3>Add a QuickBook Record</h3>
                @include('notifications._message')
                {!! Form::open(['action' => 'Accounts\QuickBookController@store']) !!}
                    @include('admin.accounts.quickbook.partials._formPartial', ['btn' => 'Add a QuickBook record'])
                {!! Form::close() !!}
            </div>
            <div class="col-xs-12 col-md-3"></div>
        </div>
    </div>
@endsection