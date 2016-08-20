@extends('layouts.app')
@section('styles')
    {!! Html::style('customer/css/home.css') !!}
@endsection
@section('content')
        <div class="container">
           <div class="page-container">
               <div class="row">
                   <div class="col-md-3">
                       <a href="{!! asset('system/customer') !!}"> Add Customer</a>
                   </div>
               </div>
           </div>
        </div>
@endsection