{!! Form::label('name', 'Name :') !!}
{!! Form::text('name') !!}

<br />

{!! Form::label('lastname', 'Lastname :') !!}
{!! Form::text('lastname') !!}

<br />

{!! Form::label('email', 'Email :') !!}
{!! Form::text('email') !!}

<br />

@if($password)
    {!! Form::label('password', 'Password : ') !!}
    {!! Form::text('password') !!}

    <br />
@endif

{!! Form::label('nic', 'NIC : ') !!}
{!! Form::text('nic') !!}

<br />

{!! Form::label('basic', 'Basic Salary') !!}
{!! Form::text('basic') !!}

<br />
{!! Form::label('Access type : ') !!}
{!! Form::select('type_lists[]', $type_lists, null, ['multiple']) !!}

<br />

{!! Form::label('Employee Type : ') !!}
{!! Form::select('employee_types[]', $employee_type, null, ['multiple']) !!}

<br />

{!! Form::label('gender') !!}
{!! Form::select('gender', [0 => 'female', 1 => 'male']) !!}

<br />

{!! Form::label('terminated', 'is Terminated : ') !!}
{!! Form::checkbox('terminated') !!}

<br />
<br />

{!! Form::submit($btn) !!}