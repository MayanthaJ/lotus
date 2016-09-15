@extends('layouts.MainLayOutNav')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3"></div>

            <div class="col-xs-12 col-sm-6">
                <h3>Account Overview</h3>
                <br/>
                {{--<div id="perf_div"></div>--}}
                {{--@columnchart('Finances', 'perf_div')--}}


                <div class="panel-body">
                    <div class="text-center slight">
                    </div>

                    <div class="flot-chart" style="height: 160px;margin-top: 5px">
                        <div class="flot-chart-content" id="flot-line-chart"></div>
                    </div>

                    <div class="small text-center">All active users from last month.</div>
                </div>


            </div>

            <div class="col-xs-12 col-sm-3"></div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            // Flot charts data and options
            var data1 = {!! json_encode($sendArray) !!};
            var data2 = {!! json_encode($sendArray2) !!};

            var chartUsersOptions = {
                series: {
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 1,
                        fill: 1

                    }

                },
                grid: {
                    tickColor: "#404652",
                    borderWidth: 0,
                    borderColor: '#404652',
                    color: '#404652'
                },
                colors: ["#f7af3e", "#DE9536"]
            };

            $.plot($("#flot-line-chart"), [{data: data2, label: "Income"}, {
                data: data1,
                label: "Expense"
            }], chartUsersOptions);
        });
    </script>
@endsection
