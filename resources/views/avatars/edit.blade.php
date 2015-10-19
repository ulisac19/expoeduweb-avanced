@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($avatar, ['route' => ['avatars.update', $avatar->id], 'method' => 'patch']) !!}

        @include('avatars.fields')

    {!! Form::close() !!}
</div>
@endsection
