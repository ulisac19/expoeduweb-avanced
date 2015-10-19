@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'dimensionPartes.store']) !!}

        @include('dimensionPartes.fields')

    {!! Form::close() !!}
</div>
@endsection
