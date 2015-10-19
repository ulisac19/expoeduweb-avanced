@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($avatarMedio, ['route' => ['avatarMedios.update', $avatarMedio->id], 'method' => 'patch']) !!}

        @include('avatarMedios.fields')

    {!! Form::close() !!}
</div>
@endsection
