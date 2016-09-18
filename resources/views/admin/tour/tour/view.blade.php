@extends('layouts.MainLayOutNav')

@section('section')
    <?php dd($tour->customers)?>
    <div class="row">
        <div class="col-md-9">
            <tr>
                <th>Tour Code</th>
                <th>Tour Name</th>
                <th>Tour Date</th>
                <th>Tour Customers</th>
            </tr>

            <tr>
                <td>{!! $tour->code !!}</td>
                <td>{!! $tour->name !!}</td>
                <td>{!! $tour->arrive !!}</td>
                <td>
                    <ul>
                        @foreach($tour->customers as $customer)
                            <li>{!! $customer->name !!} {!! $customer->lastname !!}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>

        </div>
    </div>
@endsection

