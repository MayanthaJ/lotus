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
                                Add New Agent
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
                                View All Agents
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
        <div class="col-md-3"></div>
        <div class="col-sm-6 col-md-6">
            <h2>Add Customer</h2>
            @include('notifications._message')
            {!! Form::open(['action' => 'Agent\AgentController@store','id'=>'agentForm']) !!}
            @include('admin.agent.partials._formPartial',['btn' => 'Add Agent','advance_payment'=>'1'])
            {!! Form::close() !!}
        </div>
        <div class="col-md-3"></div>

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
@section('js')
    <script>
        $('#agentForm').formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: 'Name should not be empty'
                        },
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: 'The name can consist of alphabetical characters and spaces only'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Email should be empty'
                        },
                        emailAddress: {
                            message: 'Should be a valid email address'
                        }
                    }
                },

                registeredNo: {
                    validators: {
                        notEmpty: {
                            message: 'Registration Number should be empty '
                        }
                    }
                },
                number: {
                    validators: {
                        notEmpty: {
                            message: 'Phone Number should not be empty'
                        },
                        regexp: {
                            regexp: /^[0-9\s]+$/i,
                            message: 'The number can consist of numbers only'
                        }
                    }
                }


            }
        });
    </script>
@endsection