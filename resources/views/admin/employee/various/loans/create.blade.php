@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h3>Add Loan to a Employee</h3>
                {!! Form::open() !!}
                    {!! Form::label('loan_name_lists') !!}
                    {!! Form::select('loan_name_lists', $loan_name_lists, null, ['class' => 'form-control']) !!}
                    <br />

                    {!! Form::label('employee_names', 'Select employee : ') !!}
                    {!! Form::select('employee_names', $employee_names, null, ['class' => 'form-control']) !!}

                    <br />
                    {!! Form::label('amount', 'Amount :') !!}
                    {!! Form::text('amount', null, ['class' => 'form-control']) !!}

                    <br />
                    <br />
                    {!! Form::submit('Add loan') !!}
                {!! Form::close() !!}
            </div>

            <div class="col-sm-12 col-md-3">

            </div>
        </div>
    </div>
@endsection