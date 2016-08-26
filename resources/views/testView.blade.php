@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3"></div>

            <div class="col-xs-12 col-sm-6">
                <h3>Account Overview</h3>
                <br />
                <div id="perf_div"></div>
                @columnchart('Finances', 'perf_div')
            </div>

            <div class="col-xs-12 col-sm-3"></div>
        </div>
    </div>
@endsection
