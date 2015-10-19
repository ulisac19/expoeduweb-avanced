<!-- Nombre Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nombre', 'Nombre:') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('direccion', 'Direccion:') !!}
	{!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('telefono', 'Telefono:') !!}
	{!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('email', 'Email:') !!}
	{!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('descripcion', 'Descripcion:') !!}
	{!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Logo Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('logo', 'Logo:') !!}
	{!! Form::file('logo') !!}
</div>

<!-- Razon Social Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('razon_social', 'Razon Social:') !!}
	{!! Form::text('razon_social', null, ['class' => 'form-control']) !!}
</div>

<!-- Rif Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('RIF', 'Rif:') !!}
	{!! Form::text('RIF', null, ['class' => 'form-control']) !!}
</div>

<!-- Website Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('website', 'Website:') !!}
	{!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<!-- Facebook Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('facebook', 'Facebook:') !!}
	{!! Form::text('facebook', null, ['class' => 'form-control']) !!}
</div>

<!-- Twitter Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('twitter', 'Twitter:') !!}
	{!! Form::text('twitter', null, ['class' => 'form-control']) !!}
</div>

<!-- Instagram Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('instagram', 'Instagram:') !!}
    {!! Form::text('instagram', null, ['class' => 'form-control']) !!}
</div>

<!-- Responsable Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('responsable', 'Responsable:') !!}
    {!! Form::text('responsable', null, ['class' => 'form-control']) !!}
</div>

<!-- Responsable telefono Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('telefono_responsable', 'Telefono responsable:') !!}
    {!! Form::text('telefono_responsable', null, ['class' => 'form-control']) !!}
</div>

<!-- Responsable correo Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('correo_responsable', 'Correo de responsable:') !!}
    {!! Form::email('correo_responsable', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
