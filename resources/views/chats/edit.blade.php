@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($chat, ['route' => ['chats.update', $chat->id], 'method' => 'patch']) !!}

        @include('chats.fields')

    {!! Form::close() !!}
</div>
@endsection
