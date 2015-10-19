@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($parteTipo, ['route' => ['parteTipos.update', $parteTipo->id], 'method' => 'patch']) !!}

        @include('parteTipos.fields')

    {!! Form::close() !!}
</div>
@endsection
