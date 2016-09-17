
<br />
{!! Form::label('vehicle_name', 'Vehicle Name :') !!}
{!! Form::text('vehicle_name', null, ['class' => 'form-control']) !!}

<br />
{!! Form::label('m_year', 'Manufactured Year :') !!}
{!! Form::text('m_year', null, ['class' => 'form-control']) !!}


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
{!! Form::select('type', ['Car' => 'Car', 'Van' => 'Van'], null, ['class' => 'form-control']) !!}


<br />
{!! Form::label('Body Type') !!}
{!! Form::select('b_type', ['None' => 'None','Saloon' => 'Saloon', 'Hatch-Back' => 'Hatch-Back' ,'Wagon' => 'Wagon'], null, ['class' => 'form-control']) !!}

<br />
{!! Form::label('Color') !!}
{!! Form::select('color',['White'=>'White', 'Red'=>'Red', 'Black'=>'Black', 'Blue'=>'Blue', 'Orange'=>'Orange', 'Yellow'=>'Yellow', 'Brown'=>'Brown', 'Purple'=>'Purple', null], ['class' => 'form-control']) !!}
<br />
<br />
{!! Form::submit($btn, ['class' => 'btn btn-default btn-block']) !!}

<br />
<br />

