<!--- User Id1 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('user_id1', 'User Id1:') !!}
	{!! Form::select('user_id1', [], null, ['class' => 'form-control']) !!}
</div>

<!--- User Id2 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('user_id2', 'User Id2:') !!}
	{!! Form::select('user_id2', [], null, ['class' => 'form-control']) !!}
</div>

<!--- Enviado Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('enviado', 'Enviado:') !!}
	{!! Form::date('enviado', null, ['class' => 'form-control']) !!}
</div>

<!--- Visto Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('visto', 'Visto:') !!}
	{!! Form::date('visto', null, ['class' => 'form-control']) !!}
</div>

<!--- Msj Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('msj', 'Msj:') !!}
	{!! Form::textarea('msj', null, ['class' => 'form-control']) !!}
</div>

<!--- Estado Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('estado', 'Estado:') !!}
	{!! Form::select('estado', [], null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
