@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'avatarMedios.store']) !!}

        @include('avatarMedios.fields')

    {!! Form::close() !!}
</div>
@endsection
