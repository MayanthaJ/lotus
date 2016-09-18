@extends('layouts.MainLayOutNav')
@section('styles')
    {!! Html::style('customer/css/home.css') !!}
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="view-header">
                <div class="pull-right text-right" style="line-height: 14px">
                    <small>Lotus Tour Management<br>Customer<br> <span class="c-white">v.1.0</span></small>
                </div>
                <div class="header-icon">
                    <i class="page-header-icon fa fa-user "></i>
                </div>
                <div class="header-title">
                    <h3 class="m-b-xs">Customer Management System</h3>
                </div>
            </div>
            <hr>
        </div>
    </div>


    <div class="row">
            <div class="col-lg-2 col-xs-6">
                <div class="panel panel-filled">
                    <div class="panel-body">
                        <h3 class="m-b-none">
                            Customer</h3>
                            <span class="slight slight-align ">
                               <br/>
                               <i  class="fa fa-home  text-warning"> </i>
                                Return Customer Home
                               <br/>
                              <a class="btn btn-default" href="/system/customer">Customer</a>
                           </span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-xs-6">
                <div class="panel panel-filled">
                    <div class="panel-body">
                        <h3 class="m-b-none">
                            View</h3>
                            <span class="slight slight-align">
                                <br/>
                               <i  class="fa fa-home  text-warning"> </i>
                                View All Customers
                                <br/>
                             <a  class="btn btn-default" href="/system/customer/view">View</a>
                           </span>

                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-xs-6">
                <div class="panel panel-filled">
                    <div class="panel-body">
                        <h3 class="m-b-none">
                           New Customer
                        </h3>
                        <div class="col-md-4">
                                <span class="slight slight-align">
                                <br/>
                               <i  class="fa fa-home  text-warning"> </i>
                                Add Tour Customer
                                <br/>
                             <a  class="btn btn-default" href="/system/customer/create">Add</a>
                           </span>
                        </div>
                        <div class="col-md-4">
                                <span class="slight slight-align">
                                <br/>
                               <i  class="fa fa-home  text-warning"> </i>
                                Add Ticketing Customer
                                <br/>
                             <a  class="btn btn-default" href="/system/customer/ticketing/create">Add</a>
                           </span>
                        </div>
                        <div class="col-md-4">
                                <span class="slight slight-align">
                                <br/>
                               <i  class="fa fa-home  text-warning"> </i>
                                Add Rental Customer
                                <br/>
                             <a  class="btn btn-default" href="/system/customer/view">Add</a>
                           </span>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> Tour Customer</a>
                    </li>
                    <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">Ticket</a>
                    </li>
                    <li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false">Rental</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            <p>Add Customer to Tour</p>
                            <a  class="btn btn-default" href="/system/customer/create">Add</a>
                            <hr/>
                            <p>Tour Customer Table</p>



                        <div id="ajax-search">
                            {!! Form::text('search', null, ['class' => 'form-control', 'id' => 'search', 'placeholder' => 'Search Tour Customer']) !!}
                        </div>
                        <br/><br/>
                        <table class="table table-bordered table-responsive ajax-table">
                            <thead>
                            <tr>
                                <th>#No</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>NIC</th>
                                <th>Passport</th>
                                <th>Address </th>
                                <th>Loyalty</th>
                            </tr>
                            </thead>
                            <?php $count=1; ?>
                            @foreach($TourCustomers as $customer)
                                <tr>
                                    <td><?php echo $count; $count++ ?></td>
                                    <td>{!! $customer->fname.' '.$customer->lname  !!}</td>
                                    <td>{!! $customer->number !!}</td>
                                    <td>{!! $customer->nic !!}</td>
                                    <td>{!! $customer->passport !!}</td>
                                    <td>{!! $customer->address !!}</td>
                                    <td><?php echo \App\Models\Loyalty\Loyalty::find($customer->loyalty_id)->type ?></td>
                                    <td>
                                        <a href="{!! url('/system/customer/'.$customer->id.'/view') !!}" class="btn btn-default">
                                            View
                                        </a>
                                        <a href="{!! url('/system/customer/new/'.$customer->id.'/tour') !!}" class="btn btn-default">
                                            New
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            <tbody>

                            </tbody>
                        </table>
                        </div>

                    </div>


                    <div id="tab-2" class="tab-pane">


                        <div class="panel-body">
                            <p>Add Customer to Tour</p>
                            <a  class="btn btn-default" href="system/ticket/create">Add</a>
                            <hr/>
                            <p>Third Party Customer Table</p>
                            <div id="ajax-search">
                                {!! Form::text('search', null, ['class' => 'form-control', 'id' => 'search', 'placeholder' => 'Search Employees']) !!}
                            </div>
                            <br/><br/>
                            <table class="table table-bordered table-responsive ajax-table">
                                <thead>
                                <tr>
                                    <th>#No</th>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>NIC</th>
                                    <th>Passport</th>
                                    <th>Address </th>
                                    <th>Loyalty</th>
                                </tr>
                                </thead>
                                <?php $count=1; ?>
                                @foreach($TourCustomers as $customer)
                                    <tr>
                                        <td><?php echo $count; $count++ ?></td>
                                        <td>{!! $customer->fname.' '.$customer->lname  !!}</td>
                                        <td>{!! $customer->number !!}</td>
                                        <td>{!! $customer->nic !!}</td>
                                        <td>{!! $customer->passport !!}</td>
                                        <td>{!! $customer->address !!}</td>
                                        <td><?php echo \App\Models\Loyalty\Loyalty::find($customer->loyalty_id)->type ?></td>
                                        <td>
                                            <a href="{!! url('/system/customer/'.$customer->id.'/view') !!}" class="btn btn-default">
                                                View
                                            </a>
                                            <a href="{!! url('/system/customer/new/'.$customer->id.'/tour') !!}" class="btn btn-default">
                                                New
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                <tbody>

                                </tbody>
                            </table>
                        </div>

                    </div>


                    <div id="tab-3" class="tab-pane">


                        <div class="panel-body">
                            <p>Add Customer to Rental</p>
                            <a  class="btn btn-default" href="/system/customer/create">Add</a>
                            <hr/>
                            <p>Rental Customer Table</p>



                            <div id="ajax-search">
                                {!! Form::text('search', null, ['class' => 'form-control', 'id' => 'search', 'placeholder' => 'Search Employees']) !!}
                            </div>
                            <br/><br/>
                            <table class="table table-bordered table-responsive ajax-table">
                                <thead>
                                <tr>
                                    <th>#No</th>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>NIC</th>
                                    <th>Passport</th>
                                    <th>Address </th>
                                    <th>Loyalty</th>
                                </tr>
                                </thead>
                                <?php $count=1; ?>
                                @foreach($TourCustomers as $customer)
                                    <tr>
                                        <td><?php echo $count; $count++ ?></td>
                                        <td>{!! $customer->fname.' '.$customer->lname  !!}</td>
                                        <td>{!! $customer->number !!}</td>
                                        <td>{!! $customer->nic !!}</td>
                                        <td>{!! $customer->passport !!}</td>
                                        <td>{!! $customer->address !!}</td>
                                        <td><?php echo \App\Models\Loyalty\Loyalty::find($customer->loyalty_id)->type ?></td>
                                        <td>
                                            <a href="{!! url('/system/customer/'.$customer->id.'/view') !!}" class="btn btn-default">
                                                View
                                            </a>
                                            <a href="{!! url('/system/customer/new/'.$customer->id.'/tour') !!}" class="btn btn-default">
                                                New
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                <tbody>

                                </tbody>
                            </table>
                        </div>

                    </div>



                </div>


            </div>
        </div>

    </div>

    <br/>
@endsection