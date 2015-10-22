<!-- Nombre Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nombre', 'Nombre:') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Url Field -->
<div class="form-group col-sm-6 col-lg-8">
    {!! Form::label('url', 'Url:') !!}
	{!! Form::text('url', null, ['class' => 'form-control']) !!}
</div>

<!-- Obj Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('obj', 'Obj:') !!}
    {!! Form::file('obj', ['class' => 'file', 'data-show-upload'=>'false', 'data-show-caption'=>'true']) !!}
</div>

<!-- Imagen Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('imagen', 'Imagen:') !!}
    {!! Form::file('imagen', ['class' => 'file', 'data-show-upload'=>'false', 'data-show-caption'=>'true']) !!}
</div>

<!-- Oclusion Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('oclusion', 'Oclusion:') !!}
    {!! Form::file('oclusion', ['class' => 'file', 'data-show-upload'=>'false', 'data-show-caption'=>'true']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
