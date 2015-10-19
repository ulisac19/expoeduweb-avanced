@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($puesto, ['route' => ['puestos.update', $puesto->id], 'method' => 'patch']) !!}

        @include('puestos.fields')

    {!! Form::close() !!}
</div>
@endsection
