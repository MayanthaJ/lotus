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
                            Customer
                            <span class="slight slight-align ">
                               <br/>
                               <i  class="fa fa-home  text-warning"> </i>
                                Return Customer Home
                               <br/>
                              <a class="btn btn-default" href="/system/customer">Customer</a>
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
                             <a  class="btn btn-default" href="/system/customer/view">View</a>
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
                    <li class=""><a data-toggle="tab" href="#tab-4" aria-expanded="false">Registered</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            <strong class="c-white">Add Customer to Tour</strong>
                            <a  class="btn btn-default" href="/system/customer/create">Add</a>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane">
                        <div class="panel-body">
                            <strong class="c-white">Donec quam felis</strong>

                            <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little
                                world among the stalks, and grow familiar with the countless indescribable forms
                                of the insects
                                and flies, then I feel the presence of the Almighty, who formed us in his own
                                image, and the breath </p>

                            <p>I am alone, and feel the charm of existence in this spot, which was created for
                                the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the
                                exquisite
                                sense of mere tranquil existence, that I neglect my talents. I should be
                                incapable of drawing a single stroke at the present moment; and yet.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>

    <br/>

        <!-- customer table -->
        <table class="table table-responsive">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Date Of Birth</th>
                <th>Number</th>
                <th>NIC</th>
                <th>Passport</th>
                <th>Address </th>
                <th>Loyalty</th>
                <th> </th>
            </tr>
            <?php $count=1; ?>
            @foreach($customers as $customer)
                <tr>
                    <td><?php echo $count; $count++ ?></td>
                    <td>{!! $customer->fname.' '.$customer->sname.' '.$customer->lname  !!}</td>
                    <td>{!! $customer->age !!}</td>
                    <td>{!! $customer->dob !!}</td>
                    <td>{!! $customer->number !!}</td>
                    <td>{!! $customer->nic !!}</td>
                    <td>{!! $customer->passport !!}</td>
                    <td>{!! $customer->address1 !!}</td>
                    <td><?php echo \App\Models\Loyalty\Loyalty::find($customer->loyalty_id)->type ?></td>
                    <td>
                        <a href="{!! url('/system/customer/'.$customer->id.'/edit') !!}" class="btn btn-default">
                            edit
                        </a>
                        <a href="{!! url('/system/customer/'.$customer->id.'/add_to_another') !!}" class="btn btn-default">
                            Add to another
                        </a>
                        <a href="{!! url('/system/customer/'.$customer->id.'/terminate') !!}" class="btn btn-default">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
@endsection