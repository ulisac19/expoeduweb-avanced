@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($tipoStand, ['route' => ['tipoStands.update', $tipoStand->id], 'method' => 'patch']	) !!}

        @include('tipoStands.fields')

    {!! Form::close() !!}
</div>
@endsection
