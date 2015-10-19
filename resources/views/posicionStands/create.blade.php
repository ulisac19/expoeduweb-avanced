@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'posicionStands.store']) !!}

        @include('posicionStands.fields')

    {!! Form::close() !!}
</div>
@endsection
