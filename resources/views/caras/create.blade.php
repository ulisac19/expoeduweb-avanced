@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'caras.store']) !!}

        @include('caras.fields')

    {!! Form::close() !!}
</div>
@endsection
