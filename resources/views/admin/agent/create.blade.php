@extends('layouts.MainLayOutNav')
@section('content')
    <div class="row">
        <div class="col-lg-2 col-xs-6">
            <div class="panel panel-filled">
                <div class="panel-body">
                    <h3 class="m-b-none">
                        Agent
                        <span class="slight slight-align ">
                               <br/>
                               <i  class="fa fa-home  text-warning"> </i>
                                Agent Home
                               <br/>
                              <a class="btn btn-default" href="/system/agent">Agent</a>
                           </span>
                    </h3>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-xs-6">
            <div class="panel panel-filled activer-border">
                <div class="panel-body">
                    <h3 class="m-b-none">
                        Add

                        <span class="slight slight-align">
                                <br/>
                               <i  class="fa fa-home  text-warning"> </i>
                                Add New Customer
                                <br/>
                             <a  class="btn btn-default" href="/system/agnet/create">Add</a>
                           </span>
                    </h3>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-xs-6">
            <div class="panel panel-filled">
                <div class="panel-body">
                    <h3 class="m-b-none">
                        View
                        <span class="slight slight-align">
                                <br/>
                               <i  class="fa fa-home  text-warning"> </i>
                                View All Customers
                                <br/>
                             <a  class="btn btn-default" href="/system/agent/view">View</a>
                           </span>
                    </h3>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-xs-6">
            <div class="panel panel-filled">
                <div class="panel-body">
                    <h3 class="m-b-none">
                        View
                        <span class="slight slight-align">
                                <br/>
                               <i  class="fa fa-home  text-warning"> </i>
                                View All Customers
                                <br/>
                             <a  class="btn btn-default" href="/system/agent/view">View</a>
                           </span>
                    </h3>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-xs-6">
            <div class="panel panel-filled">
                <div class="panel-body">
                    <h3 class="m-b-none">
                        Edit
                        <span class="slight slight-align">
                                <br/>
                               <i  class="fa fa-home  text-warning"> </i>
                                Edit Customer Details
                                <br/>
                             <a  class="btn btn-default" href="/system/customer/view">Edit</a>
                           </span>
                    </h3>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-xs-6">
            <div class="panel panel-filled">
                <div class="panel-body">
                    <h3 class="m-b-none">
                        Packages
                        <span class="slight slight-align">
                                <br/>
                               <i  class="fa fa-home  text-warning"> </i>
                                View Package Details
                                <br/>
                              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal1">
                                Packages
                            </button>
                           </span>
                    </h3>
                </div>
            </div>
        </div>

    </div>
    <br/>
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <h2>Add Customer</h2>
            @include('notifications._message')
            {!! Form::open(['action' => 'Customer\CustomerController@store']) !!}
            @include('admin.customer.partials._formPartial',['btn' => 'Add Customer','advance_payment'=>'1'])
            {!! Form::close() !!}
        </div>


    </div>
@endsection
@section('modals')
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-hidden="true"
         style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title">Package Details</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>#No</th>
                            <th>Code</th>
                            <th>Package</th>
                            <th>Country</th>
                            <th>Days</th>
                            <th>Amount</th>
                            <th>Option <span class="fa fa-cog"></span></th>
                        </tr>
                        </thead>
                        <?php $count=1; ?>
                        <tbody>
                        @foreach($packagesAll as $package)
                            <tr>
                                <td><?php echo $count; $count++ ?></td>
                                <td>{!! $package->code !!}</td>
                                <th>{!! $package->name !!}</th>
                                <th>{!! $package->country !!}</th>
                                <th>{!! $package->days !!}</th>
                                <th>{!! $package->price !!}</th>
                                <th> <a href="" type="button" class="btn btn-default">
                                        View
                                    </a></th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('styles')
    <style rel="stylesheet">
        .slight-align{
            text-align: center;
        }
        .activer-border{
            border:solid 1px white;
        }
    </style>
@endsection