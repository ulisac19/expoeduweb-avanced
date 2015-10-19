@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($estado, ['route' => ['estados.update', $estado->id], 'method' => 'patch']) !!}

        @include('estados.fields')

    {!! Form::close() !!}
</div>
@endsection
