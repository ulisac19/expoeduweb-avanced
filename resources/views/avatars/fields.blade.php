<!-- Nombre Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nombre', 'Nombre:') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('descripcion', 'Descripcion:') !!}
	{!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Avatar Alto Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('avatar_alto_id', 'Avatar Alto:') !!}
	{!! Form::select('avatar_alto_id', App\Models\avatar_alto::all()->lists('nombre', 'id'), Input::old('avatar_alto_id'), ['class' => 'form-control']) !!}
</div>

<!-- Avatar Bajo Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('avatar_bajo_id', 'Avatar Bajo:') !!}
	{!! Form::select('avatar_bajo_id', App\Models\avatar_bajo::all()->lists('nombre', 'id'), Input::old('avatar_bajo_id'), ['class' => 'form-control']) !!}
</div>

<!-- Avatar Medio Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('avatar_medio_id', 'Avatar Medio:') !!}
	{!! Form::select('avatar_medio_id', App\Models\avatar_medio::all()->lists('nombre', 'id'), Input::old('avatar_medio_id'), ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
