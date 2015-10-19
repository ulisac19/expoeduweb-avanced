@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($color, ['route' => ['colors.update', $color->id], 'method' => 'patch']) !!}

        @include('colors.fields')

    {!! Form::close() !!}
</div>
@endsection
