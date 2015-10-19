@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'datos.store']) !!}

        @include('datos.fields')

    {!! Form::close() !!}
</div>
@endsection
