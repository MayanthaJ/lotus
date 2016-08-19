@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <h2>Employee Travels<br /></h2>
                @if($travels->isEmpty())
                    <p>You have no travels to show</p>
                @else
                    <ul>
                        @foreach($travels as $travel)
                            <li>{!! $travel->created_at !!}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection