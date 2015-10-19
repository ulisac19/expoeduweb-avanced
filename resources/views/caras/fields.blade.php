<!-- Numero Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('numero', 'Numero:') !!}
	{!! Form::number('numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Parte Tipo Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('parte_tipo_id', 'Parte Tipo Id:') !!}
	{!! Form::select('parte_tipo_id', [], null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
