@extends('app')

@section('content')
<div class="container">
<h1>Institucion</h1>
    @include('common.errors')

    {!! Form::open(['route' => 'institucions.store']) !!}

        @include('institucions.fields')

    {!! Form::close() !!}
</div>
@endsection
