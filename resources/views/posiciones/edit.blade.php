@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($posiciones, ['route' => ['posiciones.update', $posiciones->id], 'method' => 'patch']) !!}

        @include('posiciones.fields')

    {!! Form::close() !!}
</div>
@endsection
