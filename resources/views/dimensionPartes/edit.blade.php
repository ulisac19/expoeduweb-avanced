@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($dimensionParte, ['route' => ['dimensionPartes.update', $dimensionParte->id], 'method' => 'patch']) !!}

        @include('dimensionPartes.fields')

    {!! Form::close() !!}
</div>
@endsection
