<!--- Institucion Id Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('institucion_id', 'Institucion Id:') !!}
	{!! Form::select('institucion_id', [], null, ['class' => 'form-control']) !!}
</div>

<!--- Lat Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('lat', 'Lat:') !!}
	{!! Form::text('lat', null, ['class' => 'form-control']) !!}
</div>

<!--- Lng Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('lng', 'Lng:') !!}
	{!! Form::text('lng', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
