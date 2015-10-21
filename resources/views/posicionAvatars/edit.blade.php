@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($posicionAvatar, ['route' => ['posicionAvatars.update', $posicionAvatar->id], 'method' => 'patch']) !!}

        @include('posicionAvatars.fields')

    {!! Form::close() !!}
</div>
@endsection
