@extends('layouts.MainLayOutNav')
@section('content')

    <div class="row">
        <div class="col-lg-2 col-xs-6">
            <div class="panel panel-filled">
                <div class="panel-body">
                    <h3 class="m-b-none">
                        Tickets
                        <span class="slight slight-align ">
                               <br/>
                               <i  class="fa fa-home  text-warning"> </i>
                                Air Tickets Home
                               <br/>
                              <a class="btn btn-default" href="/system/ticket/">Tickets</a>
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
                                Place Order
                                <br/>
                             <a  class="btn btn-default" href="/system/ticket/create">Add</a>
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
                                View All Tickets Orders
                                <br/>
                             <a  class="btn btn-default" href="/system/ticket/view">View</a>
                           </span>
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-sm-6 col-md-6">
            <h4>Place New Ticket Order</h4>
            @include('notifications._message')
            {!! Form::open(['action' => 'Ticket\TicketController@store','id'=>'TicketForm']) !!}
            @include('admin.ticket.partials._formPartial',['btn' => 'Place Order'])
            {!! Form::close() !!}
        </div>
        <div class="col-md-3"></div>

    </div>

@endsection

@section('js')
    <script>
        $('#TicketForm').formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                fname: {
                    validators: {
                        notEmpty: {
                            message: 'First Name should not be empty'
                        },
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: 'The first name can consist of alphabetical characters and spaces only'
                        }
                    }
                },
                sname: {
                    validators: {
                        notEmpty: {
                            message: 'Second Name should be empty !'
                        },
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: 'The second name can consist of alphabetical characters and spaces only'
                        }
                    }
                },
                lname: {
                    validators: {
                        notEmpty: {
                            message: 'Last Name should be empty !'
                        },
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: 'The last name can consist of alphabetical characters and spaces only'
                        }
                    }
                },
                nic: {
                    validators: {
                        notEmpty: {
                            message: 'NIC Should not be Empty'
                        },
                        regexp: {
                            regexp: /^[0-9]{9}[vVxX]$/,
                            message: 'NIC is in wrong format'
                        }
                    }
                },
                from: {
                    validators: {
                        notEmpty: {
                            message: 'From should not be empty'
                        },
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: 'The From can consist of alphabetical characters and spaces only'
                        }
                    }
                },
                to: {
                    validators: {
                        notEmpty: {
                            message: 'To should not be empty'
                        },
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: 'To can consist of alphabetical characters and spaces only'
                        }
                    }
                },
                quantity: {
                    validators: {
                        notEmpty: {
                            message: 'Quantity should not be empty'
                        },
                        regexp: {
                            regexp: /^[0-9\s]+$/i,
                            message: 'The Quantity can consist Numeric  only'
                        }
                    }
                },
                amount: {
                    validators: {
                        notEmpty: {
                            message: 'Amount should not be empty'
                        },
                        regexp: {
                            regexp: /^[0-9\s]+$/i,
                            message: 'Amount can consist Numeric  only'
                        }
                    }
                }


            }
        });
    </script>
@endsection
