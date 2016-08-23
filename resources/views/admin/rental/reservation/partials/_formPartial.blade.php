
<br />
{!! Form::label('start_date', 'Start Date :') !!}
{!! Form::date('start_date', null, ['class' => 'form-control']) !!}

<br />
{!! Form::label('end_date', 'End Date :') !!}
{!! Form::date('end_date', null, ['class' => 'form-control']) !!}

<br />
{!! Form::label('driver', 'Drivers : ') !!}
{!! Form::select('driver_id', $drivers, null, ['class' => 'form-control']) !!}

<br />
{!! Form::label('vehicle', 'Vehicle   :') !!}
{!! Form::select('vehicle_id', $vehicles, null, ['class' => 'form-control']) !!}

<br />
{!! Form::label('payment', 'Payment   :') !!}
{!! Form::text('payment', null, ['class' => 'form-control']) !!}

<br />
{!! Form::label('destination', 'Destination   :') !!}
{!! Form::text('destination', null, ['class' => 'form-control']) !!}

<br />
{!! Form::submit($btn, ['class' => 'btn btn-active btn-block']) !!}

