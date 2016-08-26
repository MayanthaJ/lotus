{!! Form::label('name', 'Name :') !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}

<br/>

{!! Form::label('lastname', 'Lastname :') !!}
{!! Form::text('lastname', null, ['class' => 'form-control']) !!}

<br/>

{!! Form::label('email', 'Email :') !!}
{!! Form::text('email', null, ['class' => 'form-control']) !!}

<br/>
@if($password)
    {!! Form::label('password', 'Password : ') !!}
    {!! Form::text('password', null, ['class' => 'form-control']) !!}

    <br/>
@else
    {!! Form::label('Reset password') !!}
    {!! Html::link('/system/employee/password/edit', 'Reset password ?') !!}

    <br/>
@endif

{!! Form::label('nic', 'NIC : ') !!}
{!! Form::text('nic', null, ['class' => 'form-control']) !!}

<br/>

{!! Form::label('basic', 'Basic Salary') !!}
{!! Form::text('basic', null, ['class' => 'form-control']) !!}

<br />
{!! Form::label('address', 'Address') !!}
{!! Form::text('address', null, ['class' => 'form-control']) !!}

<br />
{!! Form::label('age', 'Age : ') !!}
{!! Form::text('age', null, ['class' => 'form-control']) !!}

<br/>
{!! Form::label('hour_rate', 'Hour Rate : ') !!}
{!! Form::text('hour_rate', null, ['class' => 'form-control']) !!}

<br/>
{!! Form::label('Access type : ') !!}
{!! Form::select('type_lists[]', $type_lists, null, ['multiple', 'class' => 'form-control']) !!}

<br/>

{!! Form::label('Employee Type : ') !!}
{!! Form::select('employee_types[]', $employee_type, null, ['multiple', 'class' => 'form-control']) !!}

<br/>

{!! Form::label('gender') !!}
{!! Form::select('gender', [0 => 'female', 1 => 'male'], null, ['class' => 'form-control']) !!}

<br/>

@if($terminate)
    {!! Form::label('terminated', 'is Terminated : ') !!}
    {!! Form::checkbox('terminated') !!}
@endif

<br/>
<br/>

{!! Form::submit($btn, ['class' => 'btn btn-default btn-block']) !!}