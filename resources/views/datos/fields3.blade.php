@extends('app')
@section('content')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&libraries=places" type="text/javascript"></script>
<div class="container">
<style>
  #map-canvas{
    width: 350px;
    height: 250px;
  }
</style>
    @include('common.errors')

    {!! Form::open(['route' => 'datos.store']) !!}

    <div class="panel panel-default">
    <div class="panel-body">
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('nombre', 'Nombre') !!}
            {!! Form::text('nombre', '', ['class' => 'form-control']) !!}
        </div>

         <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('razon', 'Razon Social') !!}
            {!! Form::text('razon', '', ['class' => 'form-control']) !!}
        </div>

         <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('telefono', 'Telefono') !!}
            {!! Form::text('telefono', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('rif', 'RIF') !!}
            {!! Form::text('rif', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('website', 'Website') !!}
            {!! Form::text('website', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('celular', 'Celular') !!}
            {!! Form::text('celular', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', '', ['class' => 'form-control']) !!}
        </div>
        <!-- pais Id Field -->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('pais_id', 'Pais:') !!}
        {!! Form::select('pais_id', App\Models\pais::all()->lists('nombre', 'id'), Input::old('pais_id'), ['class' => 'form-control']) !!}
    </div>

    <!-- estado Id Field -->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('estado_id', 'Estado:') !!}
        {!! Form::select('estado_id', [], [], ['class' => 'form-control']) !!}
    </div>


    <!-- Ciudad Id Field -->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('ciudad_id', 'Ciudad:') !!}
        {!! Form::select('ciudad_id', [], [], ['class' => 'form-control']) !!}
    </div>
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('logo', 'Logo') !!}
            {!! Form::file('logo', ['class' => 'file', 'data-show-upload'=>'false', 'data-show-caption'=>'true']) !!}
        </div>
        <div class="form-group col-sm-6 col-lg-12">
            {!! Form::label('direccion', 'Direccion') !!}
            {!! Form::text('direccion', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-6 col-lg-12">
      {!! Form::label('direccion', 'Direccion google maps') !!}
          {!! Form::text('direccion', '', ['class' => 'form-control', 'id'=>'searchmap']) !!}
          <br>
          <div id="map-canvas"></div>
        </div>
        <div class="form-group"><input type="hidden" class="form-control input-sm" name="lat" id="lat"></div>
        <div class="form-group"><input type="hidden" class="form-control input-sm" name="lng" id="lng"></div>  

      <div class="form-group col-sm-6 col-lg-6"><button type="button" class="btn btn-primary" onClick="nuevaMarca();"><i class="glyphicon glyphicon-plus"></i> Agregar sucursal</button>
      <button type="button" class="btn btn-danger" onClick="quitarMarca();"><i class="glyphicon glyphicon-minus"></i> Quitar sucursal</button></div>


    </div>
</div>
<br>
<div class="panel panel-default">
    <div class="panel-body">
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

         <!-- linkeding Field -->
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('linkeding', 'LInkeding:') !!}
            {!! Form::text('linkeding', null, ['class' => 'form-control']) !!}
        </div>
 
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
            <div class="row bs-wizard" style="border-bottom:0;">
                <!-- 
                complete
                disabled
                active
                -->
                <div class="col-xs-2 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">&nbsp;</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Registro Personal</div>
                </div>
                
                <div class="col-xs-2 bs-wizard-step complete"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum"> &nbsp;</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Areas de Interes</div>
                </div>
                
                <div class="col-xs-2 bs-wizard-step active"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum"> &nbsp;</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Empresa o Institucion</div>
                </div>
                
                <div class="col-xs-2 bs-wizard-step disabled"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum"> &nbsp;</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Contenido Stand</div>
                </div>

                <div class="col-xs-2 bs-wizard-step disabled"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum"> &nbsp;</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Armado de Stand</div>
                </div>
                
                <div class="col-xs-1 bs-wizard-step disabled"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum"> &nbsp;</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Preguntas Frecuentes</div>
                </div>
            
                <div class="col-xs-1 bs-wizard-step disabled"><!-- active -->
                  <div class="text-center bs-wizard-stepnum"> &nbsp;</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Estadisticas</div>
                </div>
            </div>

            <!-- Submit Field -->
        <div class="form-group col-sm-12">
            {!! Form::submit('Guardar y siguiente', ['class' => 'btn btn-warning']) !!}
        </div>
            
    </div>
</div>

    {!! Form::close() !!}
</div>

<script>


  var map = new google.maps.Map(document.getElementById('map-canvas'),{
    center:{
      lat: 27.72,
          lng: 85.36
    },
    zoom:15
  });
  var mismarcas = new Array();
  var j = -1;
  
  var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));

  google.maps.event.addListener(searchBox,'places_changed',function(){

    var places = searchBox.getPlaces();
    var bounds = new google.maps.LatLngBounds();
    var i, place;

    for(i=0; place=places[i];i++){
        bounds.extend(place.geometry.location);
        
      }

      map.fitBounds(bounds);
      map.setZoom(15);

  });

  function nuevaMarca()
  { j++;
    mismarcas[j] = new google.maps.Marker({
    position: {
        lat: 27.72,
            lng: 85.36
      },
      map: map,
      draggable: true
    });

    mismarcas[j].setPosition(place.geometry.location); 

    google.maps.event.addListener(mismarcas[j],'position_changed',function(){

    var lat = mismarcas[j].getPosition().lat();
    var lng = mismarcas[j].getPosition().lng();

    $('#lat').val(lat);
    $('#lng').val(lng);

    });


    

  } 
  
  function quitarMarca()
  {
    alert(j);
    mismarcas[j].remove();
   delete mismarcas[j];
    j--;
  } 

</script>
@endsection