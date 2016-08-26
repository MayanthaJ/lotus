@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-3"></div>
            <div class="col-xs-12 col-md-6">
                <h3>Edit a QuickBook Record</h3>
                {!! Form::model($quickbook, ['action' => ['Accounts\QuickBookController@store', $quickbook->id]]) !!}
                @include('admin.accounts.quickbook.partials._formPartial', ['btn' => 'Add a QuickBook record'])
                {!! Form::close() !!}
            </div>
            <div class="col-xs-12 col-md-3">
                {!! Form::open(['method' => 'DELETE', 'action' => ['Accounts\QuickBookController@destroy', $quickbook->id]]) !!}
                    {!! Form::submit('Delete this QuickBook record', ['onclick' => 'confirm("Are you sure to remove this record")']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection