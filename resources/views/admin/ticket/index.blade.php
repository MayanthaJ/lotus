@extends('layouts.MainLayOutNav')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="view-header">
                <div class="pull-right text-right" style="line-height: 14px">
                    <small>Lotus Tour Management<br>Tickets<br> <span class="c-white">v.1.0</span></small>
                </div>
                <div class="header-icon">
                    <i class="page-header-icon fa fa-user "></i>
                </div>
                <div class="header-title">
                    <h3 class="m-b-xs">Third Party Ticketing</h3>
                </div>
            </div>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-2 col-xs-6">
            <div class="panel panel-filled activer-border">
                <div class="panel-body">
                    <h3 class="m-b-none">
                        Tickets
                        <span class="slight slight-align">
                               <br/>
                               <i  class="fa fa-home text-warning"> </i>
                                Air Tickets Home
                               <br/>
                              <a class="btn btn-default" href="/system/ticket/">Tickets</a>
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
        <div class="col-md-12">

            <div class="panel panel-filled">

                <div class="panel-body">

                    <h3>Ticket Orders </h3>

                    <p>
                        Find or Search all Tickets !
                    </p>

                    <div id="ajax-search">
                        {!! Form::text('search', null, ['class' => 'form-control', 'id' => 'search', 'placeholder' => 'Search Tickets']) !!}
                    </div>
                    <br/>
                    <table class="table table-bordered table-responsive ajax-table">
                        <thead>
                        <tr>
                            <th>#No</th>
                            <th>Registered No</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Option <span class="fa fa-cog"></span></th>
                        </tr>
                        </thead>
                        <?php $count=1; ?>
                        <tbody>

                        </tbody>
                    </table>

                </div>

            </div>

        </div>
    </div>

@endsection


@section('js')
    <script type="text/javascript">
        var url = '/api/secured/agent/name/';

        var typingTimer;                //timer identifier

        var doneTypingInterval = 250;  //time in ms (5 seconds)

        $(document).on('keyup', '#search', function () {


            clearTimeout(typingTimer);

            var value = $('#search').val();

            if (value == "" || value == " ") {
                //refill
                $(".ajax-table tbody tr").remove();
                $.ajax({
                    type: "GET",
                    url:'/api/secured/agent/refill',
                    dataType: "json",
                    success: function (data) {
                        var No=1;
                        for (i = 0; i < data.length; i++) {
                            $('.ajax-table')
                                    .append(
                                            '<tr>' +
                                            '<td>'+No+'</td>'+
                                            '<td>' + data[i].registered + '</td>' +
                                            '<td>' + data[i].name + '</td>' +
                                            '<td>'+data[i].number+'</td>'+
                                            '<td>' +data[i].email+'</td>'+
                                            '<td>' + '<a href="/system/agent/' + data[i].id + '/view">View</a>' + '</td>' +
                                            '<tr/>'
                                    );
                            No++;
                        }
                    }
                });


            } else {
                typingTimer = setTimeout(doneTyping, doneTypingInterval);
            }

            function doneTyping() {
                $(".ajax-table tbody tr").remove();

                $.ajax({
                    type: "GET",
                    url: url + value,
                    dataType: "json",
                    success: function (data) {
                        var No=1;
                        for (i = 0; i < data.length; i++) {
                            $('.ajax-table')
                                    .append(
                                            '<tr>' +
                                            '<td>'+No+'</td>'+
                                            '<td>' + data[i].registered + '</td>' +
                                            '<td>' + data[i].name + '</td>' +
                                            '<td>'+data[i].number+'</td>'+
                                            '<td>' +data[i].email+'</td>'+
                                            '<td>' + '<a href="/system/agent/' + data[i].id + '/view">View</a>' + '</td>' +
                                            '<tr/>'
                                    );
                            No++;
                        }
                    }
                });
            }

        });
    </script>
