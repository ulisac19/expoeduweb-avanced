<!--- Nombre Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nombre', 'Nombre:') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!--- Codigo Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('codigo', 'Codigo:') !!}
	{!! Form::text('codigo', null, ['class' => 'form-control']) !!}
</div>

<!--- Rgb Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('rgb', 'Rgb:') !!}
	{!! Form::text('rgb', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
