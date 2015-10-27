<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <style type='text/css'>
#navbar-iframe {
display: none !important;
}
</style>
    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('css/bootstrap-social.css') !!}
    {!! Html::style('css/font-awesome.css') !!}
    {!! Html::style('css/signin.css') !!}
    {!! Html::style('css/chat.css') !!}
    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/wizard.css') !!}
    {!! Html::style('css/fileinput.min.css') !!}
    {!! Html::style('css/bootstrap-datepicker.css') !!}
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div id="a"></div>
<div class="navbar-wrapper">
      <div class="container">
    <nav class="navbar navbar-inverse navbar-static-to">
        <div class="container-fluid">
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			    <span class="sr-only">Toggle Navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/expoeduweb/public">Home</a>
		    </div>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		        <ul class="nav navbar-nav">
		        	@if (!Auth::guest())
				    	<li>{!! link_to('/expo', 'Expoedu', []) !!}</li>
				    	<li class="dropdown">
		                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Avatar <span class="caret"></span></a>
		                  <ul class="dropdown-menu">
		                    <li>{!! link_to('/avatars', 'Avatar', []) !!}</li>
		                    <li>{!! link_to('/avatarAltos', 'Avatar Altos', []) !!}</li>
		                    <li>{!! link_to('/avatarBajos', 'Avatar Bajos', []) !!}</li>
		                    <li>{!! link_to('/avatarMedios', 'Avatar Medio', []) !!}</li>
		                  </ul>
		                </li>
				    	<li class="dropdown">
		                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrar <span class="caret"></span></a>
		                  <ul class="dropdown-menu">
		                    <li>{!! link_to('/carreras', 'Carreras', []) !!}</li>
		                    <li>{!! link_to('/institucions', 'Institucion', []) !!}</li>		                   
		                    <li>{!! link_to('/colors', 'Color', []) !!}</li>
		                    <li>{!! link_to('/ciudads', 'Ciudades', []) !!}</li>
		                    <li>{!! link_to('/estados', 'Estados', []) !!}</li>

		                    <li>{!! link_to('/caras', 'cara', []) !!}</li>
		                    <li>{!! link_to('/dimensionPartes', 'dimension_parte', []) !!}</li>
		                    <li>{!! link_to('/parteTipos', 'parte_tipo', []) !!}</li>
		                    <li>{!! link_to('/tipoStands', 'tipo_stand', []) !!}</li>
		                    <li>{!! link_to('/parteStands', 'parte_stand', []) !!}</li>
		                    <li>{!! link_to('/stands', 'stand', []) !!}</li>
		                    <li>{!! link_to('/posicionStands', 'posicion_stand', []) !!}</li>
		                    <li>{!! link_to('/posiciones', 'Posiciones', []) !!}</li>
		                    <li>{!! link_to('/ferias', 'Ferias', []) !!}</li>
		                  </ul>
		                </li>
		                <li class="dropdown">
		                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Interfaces nuevas <span class="caret"></span></a>
		                  <ul class="dropdown-menu">
		                  	 <li>{!! link_to('/tipoStands/create', 'Admin - tipos stand editar', []) !!}</li>
		                  	 <li>{!! link_to('/ferias/create', 'Admin - ferias', []) !!}</li>
		                     <li>{!! link_to('/publicidads', 'Publicidades', []) !!}</li>
		                  </ul>
		                </li>
	                @endif
				</ul>
				<ul class="nav navbar-nav navbar-right">
				    @if (Auth::guest())
				        <li><a href="{{route('auth/login')}}">Login</a></li>
						<li><a href="{{route('auth/register')}}">Register</a></li>
				    @else
				<?php 
				
				$numero	= \App\Models\datos::where('users_id', '=', Auth::user()->id)->get();
				
				if(count($numero) == 0)
				{
					$model = new \App\Models\datos;
					$model->users_id = Auth::user()->id;
					$model->save();
				} ?>
				<?php $usuario = \App\Models\datos::where('users_id', '=', Auth::user()->id)->first(); ?>
		                <li class="dropdown">
		                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
		                  <ul class="dropdown-menu">
		                    <li>{!! link_to('datos/'.$usuario->id.'/edit', 'Registro personal', []) !!}</li>
		                    <li>{!! link_to('datos/'.$usuario->id.'/edit2', 'Areas de Interes', []) !!}</li>
		                    <li>{!! link_to('datos/'.$usuario->id.'/edit3', 'Empresa o institucion', []) !!}</li>
		                    <li>{!! link_to('datos/'.$usuario->id.'/edit4', 'Contenido Stand', []) !!}</li>
		                    <li>{!! link_to('datos/'.$usuario->id.'/edit5', 'Armado Stand', []) !!}</li>
		                    <li>{!! link_to('datos/'.$usuario->id.'/edit6', 'Preguntas frecuente', []) !!}</li>
		                  </ul>
		                </li>
		                <li><a href="{{route('auth/salir')}}">Logout</a></li>
		                
			        @endif
				</ul>
			</div>
		</div>
	</nav>
	</div>
	</div>

    @yield('breadcump')
               @if (Session::has('errors'))
		    <div class="alert alert-warning" role="alert">
			<ul>
	            <strong>Oops! Something went wrong : </strong>
			    @foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
    </div>
    @yield('content')

@if (!Auth::guest())

<input id="id_cliente" value="2" type="hidden" />

<div class="container" id="cont">
                    <input id="id1" type="hidden" value="<?= Auth::user()->id ?>" />
                    <input id="id2" type="hidden" value="" />

    <!--
    <div class="row chat-window col-xs-5 col-md-3" id="chat_window_todos" style="margin-left:40%">
        	<div class="col-xs-12 col-md-12">
        	<div class="panel panel-default">
                <div class="panel-heading top-bar">
                    
                    <div class="col-md-10 col-xs-10">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Todos los usuarios</h3>
                    </div>
                    <div class="col-md-2 col-xs-2">
                        <span href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></span>
                    </div>
                </div>
                <div class="panel-body msg_container_base">
                <?php $lista = \App\User::all(); ?>

			    <table class="table table-striped">
			      <thead>
			        <tr>
			          <th>Nombre</th>
			          <th>Correo</th>
			          <th>Estado</th>
			        </tr>
			      </thead>
			      <tbody>
			      	<?php foreach ($lista as $list) 
                	{ 
                		  if( $list->id != Auth::user()->id )
                		  {
                		?>
                	
			        	<tr   >
			          		<td><?= $list->name ?></td>
			          		<td><?= $list->email ?></td>
			          		<td data-id="<?= $list->name ?>" data-name="<?= $list->id ?>" id="nuevaventana"><h5><span class="label label-warning">ON</span><span class="label label-danger">OFF</span></h5></td>
			        	<tr>
			        
                	<?php }
                	} ?>
			      </tbody>
			    </table>
    			</div>
        </div>
    </div>
    </div>
    -->

@endif


    <!-- Scripts -->
    
    {!! HTML::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/fileinput.min.js') !!}
    {!! Html::script('js/bootstrap-datepicker.js') !!}
    {!! Html::script('js/region.js') !!}
    <script type="text/javascript">
  // Base para la librería.
  //Region.pointColor = "green";
  //Region.boxColor = "lightgreen";
  var x, y, largo, ancho;
  Region.container = document.getElementById("mycontainer");
  //Region.container = $("#mycontainer");
  Region.callback = function () {
    // Esta función se llama cada vez que se modifica la selección (solo a mano,
    // con Region.setRect() no se llama callback).
    console.log(Region.rect);
    x = Region.rect.x;
    y = Region.rect.y;
    ancho = Region.rect.width;
    largo = Region.rect.height;
    
  }
  Region.init();

 $(document).on('click', '.ext', function(e){
 
 });
 $(document).on('click', '.sel', function(){

 	console.log($('#x-'+this.id).val(x));
 	console.log($('#y-'+this.id).val(y));
 	console.log($('#largo-'+this.id).val(largo));
 	console.log($('#ancho-'+this.id).val(ancho));
 });
</script>
    <script type="text/javascript">
    var cont = 0;
    var band = true;
	$(document).on('click', '.panel-heading span.icon_minim', function (e) {
	    var $this = $(this);
	    if (!$this.hasClass('panel-collapsed')) {
	        $this.parents('.panel').find('.panel-body').slideUp();
	        $this.addClass('panel-collapsed');
	        $this.removeClass('glyphicon-minus').addClass('glyphicon-plus');
	    } else {
	        $this.parents('.panel').find('.panel-body').slideDown();
	        $this.removeClass('panel-collapsed');
	        $this.removeClass('glyphicon-plus').addClass('glyphicon-minus');
	    }
	});

	$(document).on('focus', '.panel-footer input.chat_input', function (e) {
	    var $this = $(this);
	    if ($('#minim_chat_window').hasClass('panel-collapsed')) {
	        $this.parents('.panel').find('.panel-body').slideDown();
	        $('#minim_chat_window').removeClass('panel-collapsed');
	        $('#minim_chat_window').removeClass('glyphicon-plus').addClass('glyphicon-minus');
	    }
	});

	$(document).on('click', '#new_chat', function (e) {
	    cont++;
	    var size = $( ".chat-window:last-child" ).css("margin-right");
	     size_total = parseInt(size) + (cont *100);
	
	     $('#container').add('div');
	    var clone = $( "#chat_window_"+cont ).clone().appendTo(".container");
	    clone.css("margin-left", size_total);
	});

	$(document).on('click', '.icon_close', function (e) {
	    cont--;
	    $(this).parent().parent().parent().parent().remove();
	    //$( "#chat_window_1" ).remove();
	});

	$(document).on('click','#nuevaventana', function (e){
		if(band)
		{
			$( "#chat_window_1" ).remove();	
			band = false;
		}
		if(!band)
		{
			$('#id_cliente').val($(this).data('name'));
			$('#cont').append('<div class="row chat-window col-xs-5 col-md-3" id="chat_window_1"><div class="col-xs-12 col-md-12"><div class="panel panel-default"><div class="panel-heading top-bar"><div class="col-md-10 col-xs-10"><h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat - '+$(this).data('id')+'  </h3></div>  <div class="col-md-2 col-xs-2"><a href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a><a href="#"><span class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a></div></div> <div class="input-group"> {!! Form::select('faqs', \App\Models\faq::all()->lists('titulo', 'id'), null, ['id'=>'faqs', 'class' => 'form-control input-sm chat_input']) !!} <span class="input-group-btn"><button onClick="envFAQ();" class="btn btn-info btn-sm btn-block no-radius">FAQ</button></span></div><div class="panel-body msg_container_base" id="contenedor"><div class="row msg_container base_sent"> </div></div><div class="panel-footer"><div class="input-group"><input id="campoTexto" type="text" class="form-control input-sm chat_input" placeholder="Escriba su mensaje aqui..."/><span class="input-group-btn"><button onclick="env();" id="sendButton" class="btn btn-primary btn-sm" id="btn-chat">Enviar</button></span></div></div></div></div></div>');
			band = true;
		}
		/*cont++;	
		if(cont == 1){
			$('#id_cliente').val($(this).data('name'));
			$('#cont').append('<div class="row chat-window col-xs-5 col-md-3" id="chat_window_1"><div class="col-xs-12 col-md-12"><div class="panel panel-default"><div class="panel-heading top-bar"><div class="col-md-10 col-xs-10"><input id="id1" type="hidden" value=""/><input id="id2" type="hidden" value=""/><h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat - '+$(this).data('id')+'</h3></div><div class="col-md-2 col-xs-2"><a href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a><a href="#"><span class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a></div></div><div class="panel-body msg_container_base" id="contenedor"><div class="row msg_container base_sent"> </div></div><div class="panel-footer"><div class="input-group"><input id="campoTexto" type="text" class="form-control input-sm chat_input" placeholder="Escriba su mensaje aqui..."/><span class="input-group-btn"><button id="sendButton" class="btn btn-primary btn-sm" id="btn-chat">Enviar</button></span></div></div></div></div></div>');
		}else{
			$( "#chat_window_1" ).remove();
			cont--;
		} */
	});


	 function envFAQ()
	 {	
       $.ajax({
        	type: "GET",
            url: "{{ route('faqs.gettexto') }}",
            data: { id: $("#faqs").val() },
            
            success:function(result)
            {	
          		$('#campoTexto').val(result);    	 
        	}
    	});
    }

	 function env(){
        	$.ajax({
        		type: "GET",
                url: "{{ route('chats.comentario') }}",
                data: { txt: $("#campoTexto").val(), id1: $('#id1').val(), id2: $('#id_cliente').val() },
                success:function(result){	
                 obj = JSON.parse(result);
				$("#contenedor").append( obj.cad ); 
				$("#contenedor").animate({
			        scrollTop: obj.cant * 100 
			    }, 300);
          		$('#campoTexto').val('');    	 

        	}});
      }
	$(document).ready(function(){
      $("#sendButton").click(env);
    });

	$("#tipo_stand_id").change(function() {

	    $.ajax({
	        url: "{{ route('tipoStands.select') }}",
	        type: 'GET',
	        data: {id : this.value},
	        success: function(result) {
	           $('#selectTipo').html(result);
	        }
	    });
	});


	$('#tipostand').change(function(){
		$.ajax({
			url: "{{ route('tipoStands.selecttipo') }}",
			type: "GET",
			data: {id: $('#tipostand').val()},
			success: function(result){
	           $('#galeria').html(result);
			}
		});
	});

	$(document).on('click', '#otrapregunta',  function (e){		
		$.ajax({
			url: "{{ route('faqs.otra') }}",
			type: 'GET',
			data: {},
			success: function (result){
				$('#tbody').load( "../../faqs/todos" );
			}
		});
	});
	var cad, id;
	$('.blur').blur( function (e){
	cad = this.textContent;
	id = this.id;
		$.ajax({
			url: '{{ route("faqs.actualizar") }}',
			type: 'GET',
			data: {cad: cad, id: id},
			success: function (result){
			
			}
		});	 
  		
	});
var cad, id2;
	$('.blurmsj').blur( function (e){
	cad2 = this.textContent;
	id2 = this.id;
		$.ajax({
			url: '{{ route("faqs.actualizar2") }}',
			type: 'GET',
			data: {cad: cad2, id: id2},
			success: function (result){
			
			}
		});	 
  		
	});
	var cont = 2;
	$(document).on('click', '#otraparte', function (e){
		$('#tbodyparte').append('<tr> <td><input class="form-control" contenteditable="true" name="tipo[]" id="tipo"></input></td><td><select name="imagen[]" id="imagen" class="form-control"><option value="1">Imagen</option><option value="2">Color</option></select></td><td><select name="click[]" id="click" class="form-control"><option value="1">Si</option><option value="2">No</option></select></td><td><input class="form-control" contenteditable="true" name="x[]" id="x-'+cont+'"></input></td><td><input class="form-control" contenteditable="true" name="y[]" id="y-'+cont+'""></input></td><td><input class="form-control" contenteditable="true" name="ancho[]" id="ancho-'+cont+'""></input></td><td><input class="form-control" contenteditable="true" name="largo[]" id="largo-'+cont+'""></input></td><td><button type="button" class="btn btn-danger" onClick="this.parentNode.parentNode.remove();" ><i class="glyphicon glyphicon-trash"></i></button>  <button type="button" id="'+cont+'" class="btn btn-info sel"><i class="glyphicon glyphicon-upload"></i></button></td></tr>');
	cont++;
	});

	$('#pais_id').change( function (e){
		$.ajax({
			url: "{{ route('estados.estadospais') }}",
			type: 'GET',
			data: {id: $('#pais_id').val()},
			success : function(result){
				$('#estado_id').html(result);
			}
		});
	});

	$('#estado_id').change( function (e){
		$.ajax({
			url: "{{ route('ciudads.ciudadesestado') }}",
			type: 'GET',
			data: {id: $('#estado_id').val()},
			success : function(result){
				$('#ciudad_id').html(result);	
			}
		});
	});

var myVar = setInterval(function(){ myTimer() }, 1000);
var x = y = z = rot = action = 0;
function myTimer() 
{
	$("#contenedor").load( "chats/todos/"+$('#id1').val()+"/"+$('#id_cliente').val()); 
	$.ajax({
			url: "{{ route('datos.activos') }}",
			type: 'GET',
			data: {},
			success : function(result){
				
			}
	});	

	$.ajax({
			url: "{{ route('posicionAvatars.updateposicion') }}",
			type: 'GET',
			data: {x: 1, y: 1, z: 1, rot: 1, action: 1, user_id:1 },
			success : function(result){
			//	console.log(result);
			}
	});
}
	$('.fecha').datepicker({
		 todayBtn: true,
		
	});
</script>

</body>
</html>