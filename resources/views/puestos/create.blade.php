@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'puestos.store']) !!}

        @include('puestos.fields')

    {!! Form::close() !!}
</div>
@endsection
