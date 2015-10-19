
<div class="panel panel-default">
	<div class="panel-body">
	<h2>Parte: </h2>
		<!-- Nombre Field -->
		<div class="form-group col-sm-6 col-lg-4">
		    {!! Form::label('nombre', 'Nombre:') !!}
			{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
		</div>

		<!-- Clickeable Field -->
		<div class="form-group col-sm-6 col-lg-4">
		    {!! Form::label('clickeable', 'Clickeable:') !!}
			{!! Form::select('clickeable', ['1'=>'Si', '2'=>'No'], null, ['class' => 'form-control']) !!}

		</div>

		<!-- Tipo Field -->
		<div class="form-group col-sm-6 col-lg-4">
		    {!! Form::label('tipo', 'Tipo:') !!}
			{!! Form::select('tipo', ['1'=>'Imagen', '2'=>'Color'], null, ['class' => 'form-control']) !!}
		</div>

		<!-- Tipo Stand Id Field -->
		<div class="form-group col-sm-6 col-lg-4">
		    {!! Form::label('tipo_stand_id', 'Tipo Stand:') !!}
			{!! Form::select('tipo_stand_id', \App\Models\tipo_stand::all()->lists('nombre','id'), Input::old('tipo_stand_id'), ['class' => 'form-control']) !!}
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-body">
	<h2>Dimension: </h2>
		<!-- X Field -->
		<div class="form-group col-sm-6 col-lg-4">
		    {!! Form::label('x', 'X:') !!}
			{!! Form::number('x', null, ['class' => 'form-control']) !!}
		</div>

		<!-- Y Field -->
		<div class="form-group col-sm-6 col-lg-4">
		    {!! Form::label('y', 'Y:') !!}
			{!! Form::number('y', null, ['class' => 'form-control']) !!}
		</div>

		<!-- Ancho Field -->
		<div class="form-group col-sm-6 col-lg-4">
		    {!! Form::label('ancho', 'Ancho:') !!}
			{!! Form::number('ancho', null, ['class' => 'form-control']) !!}
		</div>

		<!-- Alto Field -->
		<div class="form-group col-sm-6 col-lg-4">
		    {!! Form::label('alto', 'Alto:') !!}
			{!! Form::number('alto', null, ['class' => 'form-control']) !!}
		</div>

		<!-- Orientacion Field -->
		<div class="form-group col-sm-6 col-lg-4">
		    {!! Form::label('orientacion', 'Orientacion:') !!}
			{!! Form::select('orientacion', ['1'=>'Horizontal', '2'=>'Vertical'], null, ['class' => 'form-control']) !!}
		</div>

	</div>
</div>
<div class="panel panel-default">
	<div class="panel-body">
	<h2>Caras: </h2>
		<!-- Numero Field -->
		<div class="form-group col-sm-6 col-lg-4">
		    {!! Form::label('numero', 'Numero:') !!}
			{!! Form::file('numero', null, ['class' => 'form-control']) !!}
		</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>
	
	

	</div>
</div>

