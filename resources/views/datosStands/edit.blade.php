@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($datosStand, ['route' => ['datosStands.update', $datosStand->id], 'method' => 'patch']) !!}

        @include('datosStands.fields')

    {!! Form::close() !!}
</div>
@endsection
