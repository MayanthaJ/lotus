@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h3>Add Loan to a Employee</h3>
                {!! Form::open() !!}
                {!! Form::label('loan_name_lists') !!}
                {!! Form::select('loan_name_lists', $loan_name_lists, null, ['class' => 'form-control']) !!}
                <br/>

                {!! Form::label('employee_names', 'Select employee : ') !!}
                {!! Form::select('employee_names', $employee_names, null, ['class' => 'form-control']) !!}

                <br/>
                {!! Form::label('amount', 'Amount :') !!}
                {!! Form::text('amount', null, ['class' => 'form-control']) !!}

                <br/>
                {!! Form::label('decrement', 'Decrement :') !!}
                {!! Form::text('decrement', null, ['class' => 'form-control']) !!}

                <br/>
                <br/>
                {!! Form::submit('Add loan') !!}
                {!! Form::close() !!}

                <div class="data hidden">
                    <br/>
                    <br/>
                    <h4>Current Loans</h4>
                </div>

            </div>

            <div class="col-sm-12 col-md-3">

            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on('change', '#employee_names', function () {
                var UserID = $(this).find(':selected').val();
                var url = "/api/secured/employee/loans/";
                $.ajax({
                    type: "GET",
                    url: url + UserID,
                    dataType: "json",
                    success: function (data) {
                        var loopedData = "";
                        for (i = 0; i < data.length; i++) {
                            loopedData += '' +
                                    '<li>' +
                                    'Loan number :'
                                    + data[i].id +
                                    ' | Amount is : '
                                    + data[i].amount +
                                    ' | Remains : '
                                    + data[i].remaining +
                                    '</li>';
                        }

                        if (data.length != 0) {
                            $('.data').removeClass('hidden').append("<ul>" + loopedData + "</ul>");
                        }
                    }
                });

            })
        });
    </script>
@endsection