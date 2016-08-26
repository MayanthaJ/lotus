{!! Form::label('name', 'Name :') !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}

<br />

{!! Form::label('lastname', 'Lastname : ') !!}
{!! Form::text('lastname', null, ['class' => 'form-control']) !!}
<br/>

{!! Form::label('emai', 'Email : ') !!}
{!! Form::text('email', null, ['class' => 'form-control']) !!}

<br/>

{!! Form::label('password', 'Password : ') !!}
{!! Form::password('password', null, ['class' => 'form-control']) !!}

<br />

{!! Form::label('nic', 'National Identity Card : ') !!}
{!! Form::text('nic', null, ['class' => 'form-control']) !!}

<br />

{!! Form::label('basic', 'Basic : ') !!}
{!! Form::text('basic', null, ['class' => 'form-control']) !!}
<br />

{!! Form::label('gender','Gender :') !!}
{!! Form::Select('gender',['1'=>'Male','0'=>'Female'], null) !!}

<br/>

{!! Form::label('hired_date', 'Hire Date : ') !!}
{!! Form::date('hired_date', null, ['class' => 'form-control']) !!}
<br/>

{!! Form::submit($btn, ['class' => 'btn btn-default btn-block']) !!}