<div class="form-group">
    {!! Form::label('tour','Select Package') !!}
    {!! Form::select('tour', $packages, null, ['placeholder' => 'Select Package...','class'=>'package_selector form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tourDate') !!}
    {!! Form::select('tourDate', [], null, ['placeholder' => 'Select Tour Date...','class'=>'form-control']) !!}
</div>
@if($advance_payment)
    <div class="form-group">
        {!! Form::label('advance-payemnt','Advance Payment :') !!}
        {!! Form::text('advancePayment', null,['class'=>'form-control']) !!}
    </div>
@endif
{!! Form::submit($btn, ['class' => 'btn btn-default btn-block']) !!}