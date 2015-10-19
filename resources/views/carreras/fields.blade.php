
<!-- Nombre Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nombre', 'Nombre:') !!}
   	{!! Form::text('nombre', old('nombre'), ['class'=> 'form-control', 'placeholder'=>'Nombre', 'required'=>true]) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-8">
    {!! Form::label('descripcion', 'Descripcion:') !!}
   	{!! Form::text('descripcion', old('descripcion'), ['class'=> 'form-control', 'placeholder'=>'Nombre', 'required'=>true]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
