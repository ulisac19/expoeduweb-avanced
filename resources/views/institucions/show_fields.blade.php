<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $institucion->nombre !!}</p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{!! $institucion->direccion !!}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{!! $institucion->telefono !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $institucion->email !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $institucion->descripcion !!}</p>
</div>

<!-- Logo Field -->
<div class="form-group">
    {!! Form::label('logo', 'Logo:') !!}
    <p>{!! $institucion->logo !!}</p>
</div>

<!-- Razon Social Field -->
<div class="form-group">
    {!! Form::label('razon_social', 'Razon Social:') !!}
    <p>{!! $institucion->razon_social !!}</p>
</div>

<!-- Rif Field -->
<div class="form-group">
    {!! Form::label('RIF', 'Rif:') !!}
    <p>{!! $institucion->RIF !!}</p>
</div>

<!-- Website Field -->
<div class="form-group">
    {!! Form::label('website', 'Website:') !!}
    <p>{!! $institucion->website !!}</p>
</div>

<!-- Facebook Field -->
<div class="form-group">
    {!! Form::label('facebook', 'Facebook:') !!}
    <p>{!! $institucion->facebook !!}</p>
</div>

<!-- Twitter Field -->
<div class="form-group">
    {!! Form::label('twitter', 'Twitter:') !!}
    <p>{!! $institucion->twitter !!}</p>
</div>

<!-- Instagram Field -->
<div class="form-group">
    {!! Form::label('instagram', 'Instagram:') !!}
    <p>{!! $institucion->instagram !!}</p>
</div>

<!-- Responsable Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('responsable', 'Responsable:') !!}
    <p>{!! $institucion->responsable !!}</p>
</div>

<!-- Responsable telefono Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('telefono_responsable', 'Telefono responsable:') !!}
    <p>{!! $institucion->telefono_responsable !!}</p>
</div>

<!-- Responsable correo Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('correo_responsable', 'Correo de responsable:') !!}
    <p>{!! $institucion->correo_responsable !!}</p>
</div>