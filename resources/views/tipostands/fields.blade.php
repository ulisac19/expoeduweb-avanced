

<div class="form-group col-sm-12 col-lg-12">

	    	<br>
			<div class="form-group col-sm-6 col-lg-4">
				<!-- Nombre Field -->
				<div class="form-group col-sm-12 col-lg-12">
				    {!! Form::label('nombre', 'Nombre:') !!}
					{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
				</div>

				<!-- Oclusion Field -->
				<div class="form-group col-sm-12 col-lg-12">
				    {!! Form::label('oclusion', 'Oclusion:') !!}
					{!! Form::file('oclusion', ['class' => 'file', 'data-show-upload'=>'false', 'data-show-caption'=>'true']) !!}
				</div>

				<!-- Malla Field -->
				<div class="form-group col-sm-12 col-lg-12">
				    {!! Form::label('obj', 'Obj:') !!}
					{!! Form::file('obj', ['class' => 'file', 'data-show-upload'=>'false', 'data-show-caption'=>'true']) !!}
				</div>

				<!-- Imagen Base Field -->
				<div class="form-group col-sm-12 col-lg-12">
				    {!! Form::label('imagen_base', 'Imagen Base:') !!}
					{!! Form::file('imagen_base', ['class' => 'file', 'data-show-upload'=>'false', 'data-show-caption'=>'true']) !!}
				</div>

				<!-- Imagen Base Field -->
				<div class="form-group col-sm-12 col-lg-12">
				    {!! Form::label('plano', 'Plano:') !!}
					{!! Form::file('plano', ['class' => 'file', 'data-show-upload'=>'false', 'data-show-caption'=>'true']) !!}
				</div>

				<!-- Imagen Base Field -->
				<div class="form-group col-sm-6 col-lg-6">
				    {!! Form::label('ancho', 'Ancho:') !!}
					{!! Form::number('anchot', null, ['class' => 'form-control']) !!}
				</div>

				<!-- Imagen Base Field -->
				<div class="form-group col-sm-6 col-lg-6">
				    {!! Form::label('largo', 'Largo:') !!}
					{!! Form::number('largot', null, ['class' => 'form-control']) !!}
				</div>

				<!-- Imagen Base Field -->
				<div class="form-group col-sm-6 col-lg-6">
				    {!! Form::label('cantidad', 'Cantidad:') !!}
					{!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
				</div>				
			</div>

		<div class="form-group col-sm-6 col-lg-8">
			<div class="panel panel-default">
		    	<div class="panel-body">
		    	</div>
		    </div>
		</div>
		
</div>
<div class="form-group col-sm-12 col-lg-12">
	<div class="panel panel-default">
      <div class="panel-body">
          <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Partes</div>

            <table class="table">
              <thead>
                <tr>
	              <th width="20%">Nombre</th>
	              <th>Tipo</th>
	              <th>Clickable</th>
	              <th width="10%">X</th>
	              <th width="10%">Y</th>
	              <th width="10%">Ancho</th>
	              <th width="10%">Largo</th>
	              <th>Eliminar</th>
	            </tr>
              </thead>
              <tbody id="tbodyparte">
                <tr>
	             <td><input class="form-control" contenteditable="true" name="tipo[]" id="tipo"></input></td>
	             <td><select name="imagen[]" id="imagen" class="form-control"><option value="1">Imagen</option><option value="2">Color</option></select></td>
	             <td><select name="click[]" id="click" class="form-control"><option value="1">Si</option><option value="2">No</option></select></td>
	             <td><input class="form-control" contenteditable="true" name="x[]" id="x"></input></td>
	             <td><input class="form-control" contenteditable="true" name="y[]" id="y"></input></td>
	             <td><input class="form-control" contenteditable="true" name="ancho[]" id="ancho"></input></td>
	             <td><input class="form-control" contenteditable="true" name="largo[]" id="largo"></input></td>
	             <td><button type="button"  class="btn btn-danger" onClick="this.parentNode.parentNode.remove();" ><i class="glyphicon glyphicon-trash"></i></button></td>
	            </tr>                
              </tbody>
            </table>
          </div>
          <br>
<button type="button" id="otraparte" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Otra parte</button>

      </div>
    </div>
</div>
	<div class="panel panel-default">
      <div class="panel-body">
		<div class="form-group col-sm-12">
			   {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
		</div>
		</div>
		</div>