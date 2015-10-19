<div class="panel panel-default">
	<div class="panel-body">
			<!-- Nombre Field -->
			<div class="form-group col-sm-6 col-lg-4">
			    {!! Form::label('nombre', 'Nombre:') !!}
			    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
			</div>

			<!-- Tipo Stand Id Field -->
			<div class="form-group col-sm-6 col-lg-4">
			    {!! Form::label('tipo_stand_id', 'Tipo Stand:') !!}
				{!! Form::select('tipo_stand_id', App\Models\tipo_stand::all()->lists('nombre', 'id'), Input::old('color_id'), ['class' => 'form-control']) !!}
			</div>

			<!-- Posicion Stand Id Field -->
			<div class="form-group col-sm-6 col-lg-4">
			    {!! Form::label('posicion_stand_id', 'Posicion Stand:') !!}
			    <div id="selectTipo"><select id="posicion_stand_id" name="posicion_stand_id" class="form-control"></select></div>
			    
			    	
			    	
				<!-- {!! Form::select('posicion_stand_id', App\Models\posicion_stand::all()->lists('numero', 'id'), Input::old('color_id'), ['class' => 'form-control']) !!} -->
			</div>

			<!-- User Id Field -->
			<div class="form-group col-sm-6 col-lg-4">
			    {!! Form::label('user_id', 'Cliente:') !!}
				{!! Form::select('user_id', App\Models\institucion::all()->lists('nombre', 'id'), Input::old('color_id'), ['class' => 'form-control']) !!}
			</div>
	</div>
</div>	
<br>
<div class="panel panel-default">
	<div class="panel-body">
		<!-- Submit Field -->
		<div class="form-group col-sm-12">
			{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
		</div>
	</div>
</div>
