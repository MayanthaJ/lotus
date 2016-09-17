{!! Form::label('name', 'Name :') !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}
<br/>

{!! Form::label('departure', 'Departure date: ') !!}
{!! Form::date('date',\Carbon\Carbon::setTestNow()) !!}

{!! Form::label('time', 'Departure time : ') !!}
{!! Form::time('time',\Carbon\Carbon::setTestNow()) !!}
<be />
<br />
{!! Form::label('package', 'Select Package : ') !!}
{!! Form::select('package', $packages, null, ['placeholder' => 'Select Package...','class'=>'form-control']) !!}
<br/>
{!! Form::label('hotel', 'Select Hotel : ') !!}
{!! Form::select('Hotel', $hotels, null, ['placeholder' => 'Select Hotel...','class'=>'form-control']) !!}
<br/>
{!! Form::label('guide', 'Select Guide : ') !!}
{!! Form::select('guide', $guides, null, ['placeholder' => 'Select Guide...','class'=>'form-control']) !!}
<br/>
{!! Form::label('description', 'Description : ') !!}
{!! Form::text('description', null, ['class' => 'form-control']) !!}
<br/>


<br/>
<br/>

{!! Form::submit($btn, ['class' => 'btn btn-default btn-block']) !!}