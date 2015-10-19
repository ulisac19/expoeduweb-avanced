<div class="panel panel-default">
    <div class="panel-body">
    
    <!-- Nombres Field -->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('nombres', 'Nombres:') !!}
    	{!! Form::text('nombres', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Apellidos Field -->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('apellidos', 'Apellidos:') !!}
    	{!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Genero Field -->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('genero', 'Genero:') !!}
        {!! Form::select('genero', ['1'=>'Masculino', '2'=>'Femenino'], Input::old('genero'), ['class' => 'form-control']) !!}
    </div>

    <!-- Fecha Nacimiento Field -->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('fecha_nacimiento', 'Fecha Nacimiento:') !!}
        {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Telefono Field -->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('telefono', 'Telefono:') !!}
        {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
    </div>

    <!-- cedula Field -->
    <div class="form-group col-sm-1 col-lg-1">
        {!! Form::label('cedula', 'Tipo') !!}
        {!! Form::select('tipo', ['1'=>'J', '2'=>'V', '3'=>'G'], Input::old('genero'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-5 col-lg-3">
        {!! Form::label('cedula', 'Documento:') !!}
        {!! Form::text('cedula', null, ['class' => 'form-control']) !!}
    </div>

    <!-- celular Field -->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('celular', 'Celular:') !!}
        {!! Form::text('celular', null, ['class' => 'form-control']) !!}
    </div>

    <!-- email Field -->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
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
                <div class="col-xs-2 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum">&nbsp;</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Registro Personal</div>
                </div>
                
                <div class="col-xs-2 bs-wizard-step disabled"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum"> &nbsp;</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Areas de Interes</div>
                </div>
                
                <div class="col-xs-2 bs-wizard-step disabled"><!-- complete -->
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
