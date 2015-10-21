<!-- Nombre Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nombre', 'Nombre:') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>


<!-- Url Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('url', 'Url:') !!}
	{!! Form::text('url', null, ['class' => 'form-control']) !!}
</div>

<!-- Responsable Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('responsable', 'Responsable:') !!}
	{!! Form::select('responsable', App\User::all()->lists('name', 'id'), '', ['class' => 'form-control']) !!}
</div>

<!-- Fecha Incio Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
	{!! Form::text('fecha_inicio', null, ['class' => 'form-control fecha']) !!}
</div>

<!-- Fecha Final Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fecha_final', 'Fecha Final:') !!}
	{!! Form::text('fecha_final', null, ['class' => 'form-control fecha']) !!}
</div>

<!-- Fecha Desmontaje Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fecha_desmontaje', 'Fecha Desmontaje:') !!}
	{!! Form::text('fecha_desmontaje', null, ['class' => 'form-control fecha']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Archivos Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('archivos', 'Archivos:') !!}
    {!! Form::file('archivos', ['class' => 'file', 'data-show-upload'=>'false', 'data-show-caption'=>'true']) !!}
</div>

<!-- Plano Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('plano', 'Plano:') !!}
    {!! Form::file('plano', ['class' => 'file', 'data-show-upload'=>'false', 'data-show-caption'=>'true']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
