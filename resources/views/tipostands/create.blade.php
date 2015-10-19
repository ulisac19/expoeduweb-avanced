@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'tipoStands.store', 'files'=>true]) !!}

        @include('tipoStands.fields')

    {!! Form::close() !!}
</div>
@endsection
