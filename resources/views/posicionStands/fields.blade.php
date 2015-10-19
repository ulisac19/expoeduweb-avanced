<!-- Numero Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('numero', 'Numero:') !!}
	{!! Form::number('numero', null, ['class' => 'form-control']) !!}
</div>

<!-- X Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('x', 'X:') !!}
	{!! Form::number('x', null, ['class' => 'form-control']) !!}
</div>

<!-- Y Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('y', 'Y:') !!}
	{!! Form::number('y', null, ['class' => 'form-control']) !!}
</div>

<!-- Orientacion Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('orientacion', 'Orientacion:') !!}
	{!! Form::select('orientacion', ['1'=>'Vertical', '2'=>'Horizontal'], null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
