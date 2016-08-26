{!! Form::label('code', 'Enter Package Code :') !!}
{!! Form::text('code', null, ['class' => 'form-control']) !!}

<br/>
{!! Form::label('name', 'Name :') !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}

<br />
{!! Form::label('country', 'Country :') !!}
{!! Form::text('country', null, ['class' => 'form-control']) !!}

<br />
{!! Form::label('destination','Destination :') !!}
{!! Form::text('destination', null,['class' => 'form-control' ]) !!}

<br />
{!! Form::label('days','Days :') !!}
{!! Form::text('days', null,['class'=>'form-control']) !!}

<br />
{!! Form::label('price','Price :') !!}
{!! Form::text('price',null,['class'=>'form-control']) !!}

<br />
{!! Form::label('description','Description :') !!}
{!! Form::text('description', null,['class'=>'form-control']) !!}
<br />

{!! Form::submit($btn, ['class' => 'btn btn-default btn-block']) !!}