<br />
{!! Form::label('name', 'First Name :') !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}


<br />
{!! Form::label('lastname', 'Last Name :') !!}
{!! Form::text('lastname', null, ['class' => 'form-control']) !!}

<br />
{!! Form::label('nic', 'NIC  :') !!}
{!! Form::text('nic', null, ['class' => 'form-control']) !!}

<br />

@if($password)
    {!! Form::label('password', 'Password : ') !!}
    {!! Form::text('password', null, ['class' => 'form-control']) !!}

@endif

<br />
{!! Form::label('age', 'Age :') !!}
{!! Form::text('age', null, ['class' => 'form-control']) !!}


<br />
{!! Form::label('basic', 'Basic Salary :') !!}
{!! Form::text('basic', null, ['class' => 'form-control']) !!}

<br />
{!! Form::label('address', 'Address :') !!}
{!! Form::text('address', null, ['class' => 'form-control']) !!}
<br />

{!! Form::label('email', 'Email :') !!}
{!! Form::text('email', null, ['class' => 'form-control']) !!}
<br />

<br />
{!! Form::submit($btn, ['class' => 'btn btn-active btn-block']) !!}

