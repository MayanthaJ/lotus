@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <h2>Employee Loans<br /></h2>
                @if($loans->isEmpty())
                    <p>You have take no loans</p>
                @else
                    <ul>
                        @foreach($loans as $loan)
                            <li>{!! $loan->created_at !!}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection