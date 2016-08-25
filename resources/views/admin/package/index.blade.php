@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <a class="btn btn-default" href="/">Home</a>
            <a style="background-color: aliceblue;" class="btn btn-default" href="/system/package">Package</a>
            <a class="btn btn-default" href="/system/package/create">Add</a>
        </div>
    </div>
    <br />
    <div class="container">
        <table class="table table-responsive">
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Country</th>
                <th>Destination</th>
                <th>Days</th>
                <th>Price</th>
                <th>Description</th>
                <th>Option</th>
            </tr>
            <?php $count=1; ?>
            @foreach($packages as $package)
                <tr>
                    <td><?php echo $count; $count++ ?></td>
                    <td>{!! $package->code  !!}</td>
                    <td>{!! $package->name !!}</td>
                    <td>{!! $package->country !!}</td>
                    <td>{!! $package->destination !!}</td>
                    <td>{!! $package->days !!}</td>
                    <td>{!! $package->price !!}</td>
                    <td>{!! $package->description !!}</td>
                    <td>
                        <a href="{!! url('/system/package/'.$package->id.'/edit') !!}" class="btn btn-default">
                            Edit
                        </a>
                        <a href="{!! url('/system/package/'.$package->id.'/terminate') !!}" class="btn btn-default">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection