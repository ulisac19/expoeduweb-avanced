<!--- Nombre Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nombre', 'Nombre:') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!--- Coordenadax Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('coordenadaX', 'Coordenadax:') !!}
	{!! Form::number('coordenadaX', null, ['class' => 'form-control']) !!}
</div>

<!--- Coordenaday Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('coordenadaY', 'Coordenaday:') !!}
	{!! Form::number('coordenadaY', null, ['class' => 'form-control']) !!}
</div>

<!--- Ancho Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('ancho', 'Ancho:') !!}
	{!! Form::number('ancho', null, ['class' => 'form-control']) !!}
</div>

<!--- Largo Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('largo', 'Largo:') !!}
	{!! Form::number('largo', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
