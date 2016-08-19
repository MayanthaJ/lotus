@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <h2>Employee Allowances<br /></h2>
                @if($allowances->isEmpty())
                    <p>You have no allowances</p>
                @else
                    <ul>
                        @foreach($allowances as $allowance)
                            <li>{!! $allowance->created_at !!}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection