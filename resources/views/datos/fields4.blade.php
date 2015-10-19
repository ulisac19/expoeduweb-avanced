@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'datos.store']) !!}

  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <div class="form-group col-sm-6 col-lg-6">
          <a href="#" class="thumbnail">
            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTUwNDI3OTJhMzcgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTA0Mjc5MmEzNyI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" >
          </a>
        </div>
        <div class="form-group col-sm-6 col-lg-6">
            {!! Form::label('tipostand', 'Tipo Stand') !!}
            {!! Form::select('tipostand', App\Models\tipo_stand::all()->lists('nombre', 'id'), '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-6 col-lg-6">
            {!! Form::label('servicios', 'Productos y servicios') !!}
            {!! Form::text('servicios','', ['class' => 'form-control']) !!}
        </div>

         <div class="form-group col-sm-6 col-lg-6">
            {!! Form::label('descripcion', 'Descripcion') !!}
            {!! Form::textArea('descripcion','', ['class' => 'form-control', 'placeholder'=>' ']) !!}
        </div>
      </div>
      <div id="galeria" class="row col-sm-6 col-lg-6">

      </div>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-body">
    <h3>Redes sociales</h3>
    <div class="form-group col-sm-6 col-lg-6">
      {!! Form::label('facebook', 'Facebook') !!}
      {!! Form::text('facebook', '', ['class' => 'form-control', 'placeholder'=>'https://www.facebook.com/nombre.apellido']) !!}
    </div>
    <div class="form-group col-sm-6 col-lg-6">
      {!! Form::label('twitter', 'Twitter') !!}
      {!! Form::text('twitter', '', ['class' => 'form-control', 'placeholder'=>'https://twitter.com/nombre.apellido']) !!}
    </div>    
    <div class="form-group col-sm-6 col-lg-6">
      {!! Form::label('instagram', 'Instagram') !!}
      {!! Form::text('instagram', '', ['class' => 'form-control', 'placeholder'=>'https://www.facebook.com/nombre.apellido']) !!}
    </div>
    <div class="form-group col-sm-6 col-lg-6">
      {!! Form::label('linkedin', 'Linkedin') !!}
      {!! Form::text('linkedin', '', ['class' => 'form-control', 'placeholder'=>'https://twitter.com/nombre.apellido']) !!}
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
                
                <div class="col-xs-2 bs-wizard-step complete"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum"> &nbsp;</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Empresa o Institucion</div>
                </div>
                
                <div class="col-xs-2 bs-wizard-step active"><!-- complete -->
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
<script type="text/javascript">
</script>
@endsection