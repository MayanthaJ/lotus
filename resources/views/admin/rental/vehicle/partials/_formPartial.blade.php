
<br />
{!! Form::label('vehicle_name', 'Vehicle Name :') !!}
{!! Form::text('vehicle_name', null, ['class' => 'form-control']) !!}

<br />
{!! Form::label('m_year', 'Manufactured Year :') !!}
{!! Form::text('m_year', null, ['class' => 'form-control']) !!}

<br />
{!! Form::label('color', 'Color :') !!}
{!! Form::text('color', null, ['class' => 'form-control']) !!}

<br />
<br />
{!! Form::label('cost_per_day', 'Cost Per Day :') !!}
{!! Form::text('cost_per_day', null, ['class' => 'form-control']) !!}


<br />
<br/>
{!! Form::label('reg_no', 'Registration No  :') !!}
{!! Form::text('reg_no', null, ['class' => 'form-control']) !!}

<br/>
{!! Form::label('terminated', 'Terminated  :') !!}
{!! Form::checkbox('terminated') !!}

<br />
{!! Form::label('type') !!}
{!! Form::select('type', [0 => 'Car', 1 => 'Van'], null, ['class' => 'form-control']) !!}


<br />

{!! Form::label('Body Type') !!}
{!! Form::select('b_type', [0 => 'Saloon', 1 => 'Hatch-Back' ,2 => 'Wagon'], null, ['class' => 'form-control']) !!}

<br />
{!! Form::submit($btn, ['class' => 'btn btn-default btn-block']) !!}

<br />
<br />

