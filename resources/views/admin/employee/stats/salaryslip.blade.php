@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <h2>Employee Salary Slips <br /></h2>
                @if($salaryslips->isEmpty())
                    <p>You have no salary slips ... yet</p>
                @else
                    <ul>
                        @foreach($salaryslips as $salaryslip)
                            <li>{!! $salaryslip->created_at !!}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection
