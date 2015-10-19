@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($parteStand, ['route' => ['parteStands.update', $parteStand->id], 'method' => 'patch']) !!}

        @include('parteStands.fields')

    {!! Form::close() !!}
</div>
@endsection
