@extends('app')

@section('content')
<?php

$a = $b = $c = false;
if( $stand->tipo_stand_id > 0 && $stand->tipo_stand_id < 4){$cad = "Oro"; $c = true;$cantidad = 6;}
if( $stand->tipo_stand_id > 3 && $stand->tipo_stand_id < 7){$cad = "Plata"; $b = true;$cantidad = 4;}
if( $stand->tipo_stand_id > 6 && $stand->tipo_stand_id < 10){$cad = "Bronce"; $a = true;$cantidad = 3;}

		if($stand->tipo_stand_id == 1) // oro1 
		{
			$ancho = [291,291,280,280,233];
			$alto = [755,755,495,495,605];
			$i = 1;
		}
		if($stand->tipo_stand_id == 2) // oro2 
		{
			$ancho = [291,291,291,392,233];
			$alto = [755,755,755,755,605];
			$i = 2;
		}
		if($stand->tipo_stand_id == 3) // oro3 
		{
			$ancho = [291,291,328,328,233];
			$alto = [755,755,756,756,605];
			$i = 3;
		}
		if($stand->tipo_stand_id == 4) // plata1 
		{
			$ancho = [426,426,426];
			$alto = [1106,1106,1106];
			$i = 1;
		}
		if($stand->tipo_stand_id == 5) // plata2 
		{
			$ancho = [426,426,426];
			$alto = [1106,1106,1106];
			$i = 2;
		}
		if($stand->tipo_stand_id == 6) // plata3 
		{
			$ancho = [426,426,426];
			$alto = [1106,1106,1106];
			$i = 3;
		}
		if($stand->tipo_stand_id == 7) // bronce1 
		{
			$ancho = [626, 1446];
			$alto = [626, 1446];
			$i = 1;
		}
		if($stand->tipo_stand_id == 8) // bronce2 
		{
			$ancho = [707, 707];
			$alto = [1450, 1450];
			$i = 2;
		}

		if($stand->tipo_stand_id == 9) // bronce3 
		{
			$ancho = [830, 830];
			$alto = [1437, 1437];
			$i = 3;
		} 
?>
{!! Form::open(['route' => 'stands.store', 'enctype'=>'multipart/form-data']) !!}

	{!! Form::hidden('id', $stand->id, []) !!}
	{!! Form::hidden('tipo_stand_id', $stand->tipo_stand_id, []) !!}
	<div class="container">
	<h2>Stand tipo : <?= $cad ?></h2>

	{!! Form::hidden('cantidad', $cantidad, []) !!}

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
	        @if ($b || $c)
	        <div class="form-group col-sm-6 col-lg-4">
	            {!! Form::label('pendon3', 'Pendon3:') !!}
	        	{!! Form::file('pendon3', null, ['class' => 'form-control']) !!}
	        </div>
	        @endif
	        @if ($c)
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
	        @endif

	<!-- Submit Field -->
	<div class="form-group col-sm-12">
	    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
	    {!! Form::button('<i class="glyphicon glyphicon-question-sign"></i> Ayuda', ['class' => 'btn btn-success', 'data-toggle' => 'modal',  'data-target' => '.bs-example-modal-lg']) !!}
	</div>

	    </div>
	</div>
	</div>
{!! Form::close() !!}

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     	<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Ayuda</h4>
      </div>

      <div class="modal-body">
      		<div class="panel panel-info">
			  <!-- Default panel contents -->
			  <div class="panel-heading">Stand <?= $cad.' '.$i ?></div>
			  <div class="panel-body">Medidas que debe tener las imagenes</div>

			  	<!-- Table -->
			  	<table class="table">
			  	 <thead>
			 		<tr>
			 			<th>Nombre</th>
			 			<th>Ancho</th>
			 			<th>Largo</th>
			 		</tr>
			 	 </thead>
			 	 <tbody>
			 	 <?php for ($j = 1; $j < $cantidad; $j++) { ?>
			 	 	<tr>
			 	 		<td>Pendon <?= $j ?></td>
			 	 		<td><?= $ancho[$j - 1] ?> px</td>
			 	 		<td><?= $alto[$j - 1] ?> px</td>
			 	 	</tr>
			 	 <?php } ?>
			 	 </tbody>
				</table>
			   </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>

@endsection