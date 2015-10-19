@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($avatarBajo, ['route' => ['avatarBajos.update', $avatarBajo->id], 'method' => 'patch']) !!}

        @include('avatarBajos.fields')

    {!! Form::close() !!}
</div>
@endsection
