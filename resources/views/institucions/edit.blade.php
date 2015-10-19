@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($institucion, ['route' => ['institucions.update', $institucion->id], 'method' => 'patch']) !!}

        @include('institucions.fields')

    {!! Form::close() !!}
</div>
@endsection
