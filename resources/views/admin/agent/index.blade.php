@extends('layouts.MainLayOutNav')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="view-header">
                <div class="pull-right text-right" style="line-height: 14px">
                    <small>Lotus Tour Management<br>Agent<br> <span class="c-white">v.1.0</span></small>
                </div>
                <div class="header-icon">
                    <i class="page-header-icon fa fa-user "></i>
                </div>
                <div class="header-title">
                    <h3 class="m-b-xs">Agents Management System</h3>
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
                                Add New Agent
                                <br/>
                             <a  class="btn btn-default" href="/system/agent/create">Add</a>
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
                                View All Agents
                                <br/>
                             <a  class="btn btn-default" href="/system/agent/view">View</a>
                           </span>
                    </h3>
                </div>
            </div>
        </div>
    </div>
@endsection