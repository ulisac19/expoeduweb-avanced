<!--- X Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('x', 'X:') !!}
	{!! Form::number('x', null, ['class' => 'form-control']) !!}
</div>

<!--- Y Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('y', 'Y:') !!}
	{!! Form::number('y', null, ['class' => 'form-control']) !!}
</div>

<!--- Z Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('z', 'Z:') !!}
	{!! Form::number('z', null, ['class' => 'form-control']) !!}
</div>

<!--- Rot Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('rot', 'Rot:') !!}
	{!! Form::text('rot', null, ['class' => 'form-control']) !!}
</div>

<!--- Action Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('action', 'Action:') !!}
	{!! Form::number('action', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
