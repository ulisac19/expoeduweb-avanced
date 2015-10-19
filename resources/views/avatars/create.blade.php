@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'avatars.store']) !!}

        @include('avatars.fields')

    {!! Form::close() !!}
</div>
@endsection
