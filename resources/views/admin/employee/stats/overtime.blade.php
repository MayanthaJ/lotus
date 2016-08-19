@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <h2>Employee Over Times<br /></h2>
                @if($overtimes->isEmpty())
                    <p>You have not worked over time</p>
                @else
                    <ul>
                        @foreach($overtimes as $overtime)
                            <li>{!! $overtime->created_at !!}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection