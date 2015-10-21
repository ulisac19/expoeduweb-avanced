@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'posicionAvatars.store']) !!}

        @include('posicionAvatars.fields')

    {!! Form::close() !!}
</div>
@endsection
