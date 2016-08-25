@extends('layouts.app')
@section('style')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <a class="btn btn-default" href="/">Home</a>
            <a class="btn btn-default" href="/system/customer">Customer</a>
            <a style="background-color: aliceblue;" class="btn btn-default" href="/system/customer/create">Add Customer</a>
            <a class="btn btn-default" href="/system/customer/view">View</a>
            <a class="btn btn-default" href="/system/customer/view">Edit</a>
        </div>
    </div>
    <br />
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6"></div>
            <div class="col-sm-6 col-md-6">
                <h2>Add Customer</h2>
                @include('notifications._message')
                {!! Form::open(['action' => 'Customer\CustomerController@store']) !!}
                @include('admin.customer.partials._formPartial',['btn' => 'Add Customer'])
                {!! Form::close() !!}
            </div>


        </div>
    </div>
@endsection

@section('js')
    <!-- tour load jquery -->
    <script type="text/javascript">
       $(document).on('change','.package_selector',function(){
           var packageID=$(this).find(':selected').val();
           var loopdata =" ";
           var url='/api/secured/customer/tours/'+packageID;
           $.ajax({
                   type :"GET",
                   url : url,
                   dataType: "json",
                   success: function (data){
                       for(i = 0; i < data.length; i++){
                           loopdata += '<option value="'+data[i].id+'">'+data[i].departure+' </option>';
                       }
                       if(data.length == 0){
                           loopdata='mukuh naha';
                       }

                   }
           });
           alert(loopdata);
       });
    </script>
@endsection