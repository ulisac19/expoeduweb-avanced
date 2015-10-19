@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'ferias.store', 'files'=>true]) !!}

        @include('ferias.fields')

    {!! Form::close() !!}
</div>
@endsection
