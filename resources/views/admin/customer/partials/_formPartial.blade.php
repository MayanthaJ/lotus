<div class="form-group">
{!! Form::label('tour','Select Package') !!}
{!! Form::select('tour', $packages, null, ['placeholder' => 'Select Package...','class'=>'package_selector form-control']) !!}
 </div>
<div class="form-group">
{!! Form::label('tourDate') !!}
{!! Form::select('tourDate', [], null, ['placeholder' => 'Select Tour Date...','class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('fname', 'First Name :') !!}
{!! Form::text('fname', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('sname', 'Second Name :') !!}
{!! Form::text('sname', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('lname', 'Last Name :') !!}
{!! Form::text('lname', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('otherName','Other Name :') !!}
{!! Form::text('otherName', null,['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
{!! Form::label('dob','Date Of Birth :') !!}
{!! Form::date('dob', \Carbon\Carbon::setTestNow()) !!}
</div>
<div class="form-group">
{!! Form::label('gender','Gender :') !!}
{!! Form::Select('gender',['1'=>'Male','0'=>'Female'], null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('phoneNumber','Phone Number :') !!}
{!! Form::text('number', null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('nic','NIC Number') !!}
{!! Form::text('nic', null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('passport_id','Passport ID :') !!}
{!! Form::text('passport', null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('address','Address 1 :') !!}
{!! Form::text('address', null,['class'=>'form-control']) !!}
</div>


<br />
@if($advance_payment)
    <div class="form-group">
    {!! Form::label('advance-payemnt','Advance Payment :') !!}
    {!! Form::text('advancePayment', null,['class'=>'form-control']) !!}
        </div>
    @endif

<div class="form-group">
{!! Form::label('Loyalty     :') !!}
{!! Form::select('loyalty', $loyalty, null, ['placeholder' => 'Select Loyalty type...','class'=>'form-control']) !!}
</div>

{!! Form::submit($btn, ['class' => 'btn btn-default btn-block']) !!}