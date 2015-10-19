@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($carrera, ['route' => ['carreras.update', $carrera->id], 'method' => 'patch']) !!}

        @include('carreras.fields')

    {!! Form::close() !!}
</div>
@endsection
