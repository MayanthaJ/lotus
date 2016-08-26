{!! Form::label('amount', 'Amount : ') !!}
{!! Form::number('amount', null, ['class' => 'form-control', 'min' => 0]) !!}

<br/>

{!! Form::label('description', 'Description :') !!}
{!! Form::textarea('description', null,['class'=> 'form-control']) !!}

<br />

{!! Form::submit($btn) !!}