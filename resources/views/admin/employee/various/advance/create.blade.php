@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h3>Add Advance payment to a Employee</h3>
                {!! Form::open() !!}

                {!! Form::label('employee_names', 'Select employee : ') !!}
                {!! Form::select('employee_names', $employee_names, null, ['class' => 'form-control']) !!}

                <br />
                {!! Form::label('amount', 'Amount :') !!}
                {!! Form::text('amount', null, ['class' => 'form-control']) !!}

                <br />
                <br />
                {!! Form::submit('Add leave') !!}
                {!! Form::close() !!}

                <div class="data hidden">
                    <br/>
                    <br/>
                    <h4>Current Advance payments</h4>
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
                var url = "/api/secured/employee/advance/";
                $.ajax({
                    type: "GET",
                    url: url + UserID,
                    dataType: "json",
                    success: function (data) {
                        var loopedData = "";
                        for (i = 0; i < data.length; i++) {
                            loopedData += '' +
                                    '<li>' +
                                    'Advance payment number :'
                                    + data[i].id +
                                    ' | Amount : '
                                    + data[i].amount +
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