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
{!! Form::text('password', null, ['class' => 'form-control']) !!}

<br />

{!! Form::label('nic', 'National Identity Card : ') !!}
{!! Form::text('nic', null, ['class' => 'form-control']) !!}

<br />

{!! Form::label('basic', 'Basic : ') !!}
{!! Form::text('basic', null, ['class' => 'form-control']) !!}
<br />

{!! checkbox::label('gender', 'Gender : ') !!}
{!! checkbox::text('gender', null, ['class' => 'form-control']) !!}
<br/>

{!! Form::label('hired_date', 'Hire Date : ') !!}
{!! Form::text('hired_date', null, ['class' => 'form-control']) !!}
<br/>

{!! Form::submit($btn, ['class' => 'btn btn-default btn-block']) !!}