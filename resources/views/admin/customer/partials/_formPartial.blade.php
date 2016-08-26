{!! Form::label('tour','Select Package') !!}
{!! Form::select('tour', $packages, null, ['placeholder' => 'Select Package...','class'=>'package_selector']) !!}
{!! Form::label('tourDate') !!}
{!! Form::select('tourDate', [], null, ['placeholder' => 'Select Tour Date...']) !!}
<hr />
{!! Form::label('fname', 'First Name :') !!}
{!! Form::text('fname', null, ['class' => 'form-control']) !!}

<br/>
{!! Form::label('sname', 'Second Name :') !!}
{!! Form::text('sname', null, ['class' => 'form-control']) !!}

<br />
{!! Form::label('lname', 'Last Name :') !!}
{!! Form::text('lname', null, ['class' => 'form-control']) !!}

<br />
{!! Form::label('otherName','Other Name :') !!}
{!! Form::text('otherName', null,['class' => 'form-control' ]) !!}

<br />
{!! Form::label('age','Age :') !!}
{!! Form::text('age', null,['class'=>'form-control']) !!}

<br />
{!! Form::label('dob','Date Of Birth :') !!}
{!! Form::date('dob', \Carbon\Carbon::setTestNow()) !!}

<br />
<br />
{!! Form::label('gender','Gender :') !!}
{!! Form::Select('gender',['1'=>'Male','0'=>'Female'], null) !!}

<br />
{!! Form::label('phoneNumber','Phone Number :') !!}
{!! Form::text('number', null,['class'=>'form-control']) !!}

<br />
{!! Form::label('nic','NIC Number') !!}
{!! Form::text('nic', null,['class'=>'form-control']) !!}

<br />
{!! Form::label('passport_id','Passport ID :') !!}
{!! Form::text('passport', null,['class' => 'form-control']) !!}

<br />
{!! Form::label('address1','Address 1 :') !!}
{!! Form::text('address1', null,['class'=>'form-control']) !!}

<br />
{!! Form::label('address2','Address 2 :') !!}
{!! Form::text('address2', null,['class'=>'form-control']) !!}

<br />
@if($advance_payment)
    {!! Form::label('advance-payemnt','Advance Payment :') !!}
    {!! Form::text('advancePayment', null,['class'=>'form-control']) !!}
    @endif

<hr />
{!! Form::label('Loyalty     :') !!}
{!! Form::select('loyalty', $loyalty, null, ['placeholder' => 'Select Loyalty type...']) !!}
<br />

<br />
{!! Form::submit($btn, ['class' => 'btn btn-default btn-block']) !!}