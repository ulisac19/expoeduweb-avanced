@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'chats.store']) !!}

        @include('chats.fields')

    {!! Form::close() !!}
</div>
@endsection
