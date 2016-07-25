{!! Form::label('name', 'Name :') !!}
{!! Form::text('name') !!}

<br />

{!! Form::label('lastname', 'Lastname :') !!}
{!! Form::text('lastname') !!}

<br />

{!! Form::label('email', 'Email :') !!}
{!! Form::text('email') !!}

<br />

{!! Form::label('password', 'Password : ') !!}
{!! Form::text('password') !!}

<br />

{!! Form::label('nic', 'NIC : ') !!}
{!! Form::text('nic') !!}

<br />

{!! Form::label('basic', 'Basic Salary') !!}
{!! Form::text('basic') !!}

<br />

{!! Form::label('gender') !!}
{!! Form::select('gender', [0 => 'female', 1 => 'male']) !!}

<br />

{!! Form::label('terminated') !!}
{!! Form::checkbox('terminated') !!}

<br />
<br />

{!! Form::submit($btn) !!}