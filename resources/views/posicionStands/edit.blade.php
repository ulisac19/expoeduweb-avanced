@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($posicionStand, ['route' => ['posicionStands.update', $posicionStand->id], 'method' => 'patch']) !!}

        @include('posicionStands.fields')

    {!! Form::close() !!}
</div>
@endsection
