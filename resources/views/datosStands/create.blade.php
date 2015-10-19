@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'datosStands.store']) !!}

        @include('datosStands.fields')

    {!! Form::close() !!}
</div>
@endsection
