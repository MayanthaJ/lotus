@extends('layouts.MainLayOutNav')
@section('content')
    <div class="row">
        <div class="col-lg-2 col-xs-6">
            <div class="panel panel-filled active-boder">
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
                                Add Agent
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
                                View All Agent
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
                        cQuick
                        <span class="slight slight-align">
                                <br/>
                               <i  class="fa fa-home  text-warning"> </i>
                                Quick View Agents List
                                <br/>
                              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal1">
                                Quick
                            </button>
                           </span>
                    </h3>
                </div>
            </div>
        </div>
    </div>

@endsection