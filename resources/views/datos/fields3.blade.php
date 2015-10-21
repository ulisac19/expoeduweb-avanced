@extends('app')
@section('content')

<div class="container">
<style>
 html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 500px;
    width: 500px; 
      }
#floating-panel {
  position: absolute;
  top: 10px;
  left: 25%;
  z-index: 5;
  background-color: #fff;
  padding: 5px;
  border: 1px solid #999;
  text-align: center;
  font-family: 'Roboto','sans-serif';
  line-height: 30px;
  padding-left: 10px;
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


      <!--
      <button type="button" class="btn btn-primary" onclick="clearMarkers();" value="Mos">
      <button type="button" class="btn btn-primary" onclick="showMarkers();" value="a">
      -->

    <div id="map"></div>
</div>
<div class="form-group col-sm-6 col-lg-12">
      <button type="button" class="btn btn-danger" onclick="deleteMarkers();" value=""><i class='glyphicon glyphicon-trash'></i> Quizar todos</button>
</div>
</div>

    
</br>
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

var map;
var markers = [];

function initMap() {
  var haightAshbury = {lat: 37.769, lng: -122.446};

  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 2,
    center: haightAshbury,
    mapTypeId: google.maps.MapTypeId.TERRAIN
  });

  // This event listener will call addMarker() when the map is clicked.
  map.addListener('click', function(event) {
    addMarker(event.latLng);
  });

  // Adds a marker at the center of the map.
  addMarker(haightAshbury);
}

// Adds a marker to the map and push to the array.
function addMarker(location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
  markers.push(marker);
}

// Sets the map on all markers in the array.
function setMapOnAll(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
  setMapOnAll(null);
}

// Shows any markers currently in the array.
function showMarkers() {
  setMapOnAll(map);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
  clearMarkers();
  markers = [];
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&signed_in=true&callback=initMap"></script>
@endsection