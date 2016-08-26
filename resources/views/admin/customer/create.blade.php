@extends('layouts.app')
@section('style')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <a class="btn btn-default" href="/system">Home</a>
            <a class="btn btn-default" href="/system/customer">Customer</a>
            <a style="background-color: aliceblue;" class="btn btn-default" href="/system/customer/create">Add
                Customer</a>
            <a class="btn btn-default" href="/system/customer/view">View</a>
            <a class="btn btn-default" href="/system/customer/view">Edit</a>
        </div>
    </div>
    <br/>
    <div class="container">
        <div class="row">
            <!-- view -->
            <div class="col-sm-6 col-md-6">
                <h2>Package List</h2>
                <table class="table table-responsive">
                    <tr>
                        <th></th>
                        <th>Code</th>
                        <th>Package</th>
                        <th>Amount</th>
                        <th> </th>
                    </tr>
                    <?php $count=1; ?>
                    @foreach($packagesAll as $package)
                        <tr>
                            <td><?php echo $count; $count++ ?></td>
                            <td>{!! $package->code !!}</td>
                            <th>{!! $package->name !!}</th>
                            <th>{!! $package->price !!}</th>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-sm-6 col-md-6">
                <h2>Add Customer</h2>
                @include('notifications._message')
                {!! Form::open(['action' => 'Customer\CustomerController@store']) !!}
                @include('admin.customer.partials._formPartial',['btn' => 'Add Customer','advance_payment'=>'1'])
                {!! Form::close() !!}
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