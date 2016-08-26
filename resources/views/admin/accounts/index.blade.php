@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3"></div>

            <div class="col-xs-12 col-sm-6">
                <h3>Account Overview</h3>

                <ol>
                    <li><a href="{!! url('/system/accounts/graphs/') !!}">View Graphs</a></li>
                    <li><a href="{!! url('/system/accounts/quickbook/') !!}">Access QuickBook</a></li>
                </ol>

                <br/>
                <br/>


                @for($i = 0; $i < $expenses->count(); $i++)
                    <table class="table-bordered table table-responsive">
                        <tr>
                            <th>Day</th>
                            <th>Income</th>
                            <th>Expense</th>
                            <th>Options</th>
                        </tr>
                        <tr>
                            <td>{!! $expenses[$i]->day !!}</td>
                            <td>{!! $expenses[$i]->expense !!}</td>
                            <td>{!! $incomes[$i]->income !!}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-xs btn-primary"
                                       href="{!! url('/system/accounts/stats/'.$expenses[$i]->id.'/expense') !!}">Related
                                        Expenses</a>
                                    <a class="btn btn-xs btn-primary"
                                       href="{!! url('/system/accounts/stats/'.$expenses[$i]->id.'/income') !!}">Related
                                        Income</a>
                                </div>
                            </td>
                        </tr>
                    </table>
                @endfor


            </div>

            <div class="col-xs-12 col-sm-3"></div>
        </div>
    </div>
@endsection