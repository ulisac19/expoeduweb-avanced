@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'avatarBajos.store']) !!}

        @include('avatarBajos.fields')

    {!! Form::close() !!}
</div>
@endsection
