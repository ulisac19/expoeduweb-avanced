<div class="panel panel-default">
    <div class="panel-body">
        <!-- imagen_mesa Field -->
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('imagen_mesa', 'Imagen mesa:') !!}
            {!! Form::text('imagen_mesa', null, ['class' => 'form-control']) !!}
        </div>

        <!-- color_mesa Field -->
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('color_mesa', 'Color mesa:') !!}
            {!! Form::text('color_mesa', null, ['class' => 'form-control']) !!}
        </div>

        <!-- color_mural Field -->
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('color_mural', 'Color mural:') !!}
            {!! Form::text('color_mural', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-body">
        <!-- Pendon1 Field -->
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('pendon1', 'Pendon1:') !!}
            {!! Form::file('pendon1', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Pendon2 Field -->
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('pendon2', 'Pendon2:') !!}
        	{!! Form::file('pendon2', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Pendon3 Field -->
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('pendon3', 'Pendon3:') !!}
        	{!! Form::file('pendon1', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Pendon4 Field -->
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('pendon4', 'Pendon4:') !!}
        	{!! Form::file('pendon4', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Pendon5 Field -->
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('pendon5', 'Pendon5:') !!}
        	{!! Form::file('pendon5', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Stan Id Field -->
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('stan_id', 'Stan Id:') !!}
        	{!! Form::text('stan_id', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
