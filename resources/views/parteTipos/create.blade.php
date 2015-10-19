@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'parteTipos.store']) !!}

        @include('parteTipos.fields')

    {!! Form::close() !!}
</div>
@endsection
