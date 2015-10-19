@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($datos, ['route' => ['datos.update', $datos->id], 'method' => 'patch']) !!}

        @include('datos.fields')

    {!! Form::close() !!}
</div>
@endsection
