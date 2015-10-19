<!--- Stand Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('stand', 'Stand:') !!}
	{!! Form::text('stand', null, ['class' => 'form-control']) !!}
</div>

<!--- Posx Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('posx', 'Posx:') !!}
	{!! Form::text('posx', null, ['class' => 'form-control']) !!}
</div>

<!--- Posy Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('posy', 'Posy:') !!}
	{!! Form::text('posy', null, ['class' => 'form-control']) !!}
</div>

<!--- Posz Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('posz', 'Posz:') !!}
	{!! Form::text('posz', null, ['class' => 'form-control']) !!}
</div>

<!--- Rotx Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('rotx', 'Rotx:') !!}
	{!! Form::text('rotx', null, ['class' => 'form-control']) !!}
</div>

<!--- Roty Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('roty', 'Roty:') !!}
	{!! Form::text('roty', null, ['class' => 'form-control']) !!}
</div>

<!--- Rotz Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('rotz', 'Rotz:') !!}
	{!! Form::text('rotz', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
