@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'datos.store']) !!}

    <div class="panel panel-default">
    <div class="panel-body">

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
                <div class="col-xs-1 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">&nbsp;</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Registro Personal</div>
                </div>
                
                <div class="col-xs-1 bs-wizard-step complete"><!-- complete -->
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
                
                <div class="col-xs-2 bs-wizard-step complete"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum"> &nbsp;</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Contenido Stand</div>
                </div>

                <div class="col-xs-2 bs-wizard-step active"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum"> &nbsp;</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Armado de Stand</div>
                </div>
                
                <div class="col-xs-2 bs-wizard-step disabled"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum"> &nbsp;</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Preguntas Frecuentes</div>
                </div>
            
                <div class="col-xs-2 bs-wizard-step disabled"><!-- active -->
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