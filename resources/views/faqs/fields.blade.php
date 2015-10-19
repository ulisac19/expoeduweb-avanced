<!-- Titulo Field -->
<div class="form-group col-sm-6 col-lg-12">
    {!! Form::label('titulo', 'Titulo:') !!}
	{!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Msj Field -->
<div class="form-group col-sm-6 col-lg-12">
    {!! Form::label('msj', 'Msj:') !!}
	{!! Form::textarea('msj', null, ['class' => 'form-control']) !!}
</div>

	{!! Form::hidden('usuario_id', Auth::user()->id, []) !!}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
