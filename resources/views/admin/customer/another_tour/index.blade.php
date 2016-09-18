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
                    <h3 class="m-b-xs">Customer Tour Management System</h3>
                </div>
            </div>
            <hr>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-2">
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

        <div class="col-lg-2 ">
            <div class="panel panel-filled">
                <div class="panel-body">
                    <h3 class="m-b-none">
                        New
                    </h3>
                    <span class="slight slight-align">
                                <br/>
                               <i  class="fa fa-home  text-warning"> </i>
                                Assign to New Tour
                                <br/>
                             <a  class="btn btn-default" href="/system/customer/new/tour/1/create">Add</a>
                           </span>

                </div>
            </div>
        </div>

    </div>
@endsection