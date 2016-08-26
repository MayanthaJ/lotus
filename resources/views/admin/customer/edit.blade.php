@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <a class="btn btn-default" href="system">Home</a>
            <a class="btn btn-default" href="/system/customer">Customer</a>
            <a class="btn btn-default" href="/system/customer/create">Add Customer</a>
            <a class="btn btn-default" href="/system/customer/view">View</a>
            <a style="background-color: aliceblue;" class="btn btn-default" href="/system/customer/view">Edit</a>
            <hr />
            <div class="col-sm-12 col-md-12">
                @include('notifications._message')
                <h2>Edit Employee
                    <br />
                    <small>Employee ID : {!! $customer->id !!}</small>
                </h2>
                <br />

                {!! Form::model($customer, ['method' => 'PATCH', 'action' => ['Customer\CustomerController@update', $customer->id]]) !!}
                @include('admin.customer.partials._formPartial', ['btn' => 'Update Customer','advance_payment'=>'0'])
                {!! Form::close() !!}

                <div class="col-sm-12 col-md-3">

                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- tour load jquery -->
    <script type="text/javascript">
        $(document).on('change', '.package_selector', function () {
            var packageID = $(this).find(':selected').val();
            var loopdata = "";
            var url = '/api/secured/customer/tours/' + packageID;

            $.ajax({
                type: "GET",
                url: url,
                dataType: "json",
                success: function (data) {
                    for (i = 0; i < data.length; i++) {
                        loopdata += '<option value="' + data[i].id + '">' + data[i].departure + '</option>';
                    }
                    $('#tourDate').html(loopdata);
                }
            });
        });
    </script>
@endsection