@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'avatarAltos.store']) !!}

        @include('avatarAltos.fields')

    {!! Form::close() !!}
</div>
@endsection
