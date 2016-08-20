@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h3>Add Leave to a Employee</h3>
                {!! Form::open() !!}
                {!! Form::label('leave_type_lists') !!}
                {!! Form::select('leave_type_lists', $leave_type_lists, null, ['class' => 'form-control']) !!}
                <br />

                {!! Form::label('employee_names', 'Select employee : ') !!}
                {!! Form::select('employee_names', $employee_names, null, ['class' => 'form-control']) !!}

                <br />
                {!! Form::label('reason', 'Reason :') !!}
                {!! Form::textarea('reason', null, ['class' => 'form-control']) !!}

                <br />
                <br />
                {!! Form::submit('Add leave') !!}
                {!! Form::close() !!}
            </div>

            <div class="col-sm-12 col-md-3">

            </div>
        </div>
    </div>
@endsection