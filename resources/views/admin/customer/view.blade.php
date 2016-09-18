@extends('layouts.MainLayOutNav')
@section('content')
    <div class="row">
        <div class="col-lg-2 col-xs-6">
            <div class="panel panel-filled">
                <div class="panel-body">
                    <h3 class="m-b-none">
                        Customer
                        <span class="slight slight-align ">
                               <br/>
                               <i  class="fa fa-home  text-warning"> </i>
                                Customer Home
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
                        Add
                        <span class="slight slight-align">
                                <br/>
                               <i  class="fa fa-home  text-warning"> </i>
                                New Tour
                                <br/>
                             <a  class="btn btn-default" href="/system/customer/new/tour/{!! $customers->id  !!}/create">Add</a>
                           </span>
                    </h3>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-xs-6">
            <div class="panel panel-filled activer-border">
                <div class="panel-body">
                    <h3 class="m-b-none">
                        View
                        <span class="slight slight-align">
                                <br/>
                               <i  class="fa fa-home  text-warning"> </i>
                                Customer Details
                                <br/>
                             <a  class="btn btn-default" href="/system/customer/{!! $customers->id !!}/view">View</a>
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
                                Edit Agent Details
                                <br/>
                             <a  class="btn btn-default" href="/system/customer/{!! $customers->id !!}/edit">Edit</a>
                           </span>
                    </h3>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-xs-6">
            <div class="panel panel-filled">
                <div class="panel-body">
                    <h3 class="m-b-none">
                        Quick
                        <span class="slight slight-align">
                                <br/>
                               <i  class="fa fa-home  text-warning"> </i>
                                Customer All Tours
                                <br/>
                              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#tourViewModel">
                                Quick
                            </button>
                           </span>
                    </h3>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-filled">

                <div class="panel-body">

                    <h4>Customer :</h4>
                    <p>Customer ID : {!! $customers->id !!}</p>
                    <table class="table table-bordered table-responsive ajax-table">
                        <?php $count=1; ?>
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{!! $customers->fname !!} {!! $customers->sname !!} {!! $customers->lname !!}</td>
                            </tr>
                            <tr>
                                <td>Other Name</td>
                                <td>{!! $customers->otherName !!}</td>
                            </tr>
                            <tr>
                                <td>Age</td>
                                <td>{!! $customers->age !!}</td>
                            </tr>
                            <tr>
                                <td>Date Of Birth</td>
                                <td>{!! $customers->dob !!}</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td><?php if($customers->gender){ echo 'Male';}else{echo 'Femail';} ?></td>
                            </tr>
                            <tr>
                                <td>Number</td>
                                <td>{!! $customers->number !!}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{!! $customers->address !!}</td>
                            </tr>
                            <tr>
                                <td>NIC</td>
                                <td>{!! $customers->nic !!}</td>
                            </tr>
                            <tr>
                                <td>Passport</td>
                                <td>{!! $customers->passport !!}</td>
                            </tr>
                            <tr>
                                <td>Loyalty</td>
                                <td>should get loyalty type </td>
                            </tr>
                            <tr>
                                <td>Customer Type</td>
                                <td>type should come here</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>
    </div>
@endsection

@section('modals')
    <div class="modal fade" id="tourViewModel" tabindex="-1" role="dialog" aria-hidden="true"
         style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title">customer Tours</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>#No</th>
                            <th>Name</th>
                            <th>Arrival</th>
                            <th>Departure</th>
                            <th>Days</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <?php $count=1; ?>
                        <tbody>
                        @foreach( $customerTours as $tour)
                            <tr>
                               <td> {!! $tour->tour_id !!}</td>
                            </tr>
                                <?php $count++ ?>
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