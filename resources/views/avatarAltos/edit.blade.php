@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($avatarAlto, ['route' => ['avatarAltos.update', $avatarAlto->id], 'method' => 'patch']) !!}

        @include('avatarAltos.fields')

    {!! Form::close() !!}
</div>
@endsection
