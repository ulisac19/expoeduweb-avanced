<!-- Enlace Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('enlace', 'Enlace:') !!}
	{!! Form::text('enlace', null, ['class' => 'form-control']) !!}
</div>

<!-- Imagen Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('imagen', 'Imagen:') !!}
	{!! Form::file('imagen', null, ['class' => 'form-control']) !!}
</div>

<!-- Color Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('color', 'Color:') !!}
	{!! Form::select('color', \App\Models\color::all()->lists('nombre','id'), null, ['class' => 'form-control']) !!}
</div>

<!-- Stand Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('stand_id', 'Stand:') !!}
	{!! Form::select('stand_id', \App\Models\stand::all()->lists('nombre','id'), null, ['class' => 'form-control']) !!}
</div>

<!-- ParteStand Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('parte_tipo_id', 'Parte:') !!}
	{!! Form::select('parte_tipo_id', \App\Models\parte_tipo::all()->lists('nombre','id'), null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
