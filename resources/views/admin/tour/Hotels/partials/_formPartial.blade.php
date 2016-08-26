{!! Form::label('name', 'Name :') !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}

<br />

{!! Form::label('phone', 'Phone : ') !!}
{!! Form::text('phone', null, ['class' => 'form-control']) !!}

<br />

{!! Form::label('emai', 'Email : ') !!}
{!! Form::text('email', null, ['class' => 'form-control']) !!}
<br />

{!! Form::label('city', 'City : ') !!}
{!! Form::text('city', null, ['class' => 'form-control']) !!}
<br />

{!! Form::label('expenses', 'Expenses : ') !!}
{!! Form::text('expenses', null, ['class' => 'form-control']) !!}
<br />

{!! Form::submit($btn, ['class' => 'btn btn-default btn-block']) !!}