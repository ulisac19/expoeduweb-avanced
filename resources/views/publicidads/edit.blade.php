@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($publicidad, ['route' => ['publicidads.update', $publicidad->id], 'method' => 'patch']) !!}

        @include('publicidads.fields')

    {!! Form::close() !!}
</div>
@endsection
