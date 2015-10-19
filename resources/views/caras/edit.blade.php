@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($cara, ['route' => ['caras.update', $cara->id], 'method' => 'patch']) !!}

        @include('caras.fields')

    {!! Form::close() !!}
</div>
@endsection
