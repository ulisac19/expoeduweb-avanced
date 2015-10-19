@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'datos.store']) !!}

    <div class="panel panel-default">
      <div class="panel-body">
          <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Preguntas frecuentes</div>

            <table class="table">
              <thead>
                <tr>
                  <th width="20%">Pregunta</th>
                  <th>Respuesta </th>
                  <th width="10%">Eliminar</th>
                </tr>
              </thead>
              <tbody id="tbody">
                <?php
                $todos = \App\Models\faq::all(); 
                $cad = '';
                foreach ($todos as $faq) 
                {
                  $cad = $cad.'<tr> <td><p id="'.$faq->id.'" class="blur" contenteditable="true">'.$faq->titulo.'</p></td><td><p id="'.$faq->id.'" class="blurmsj" contenteditable="true">'.$faq->msj.'</p></td><td><a class="btn btn-danger" href="../../faqs/'.$faq->id.'/delete" onclick="return confirm('."'Esta seguro de eliminar esta pregunta?'".')"><i class="glyphicon glyphicon-trash"></i></a></td></tr>';
                }
                echo $cad;
                ?>
                
              </tbody>
            </table>
          </div>
          <br>
<a href="#" id="otrapregunta" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Otra pregunta</a>
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

                <div class="col-xs-2 bs-wizard-step complete"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum"> &nbsp;</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Armado de Stand</div>
                </div>
                
                <div class="col-xs-2 bs-wizard-step active"><!-- complete -->
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