@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'publicidads.store', 'files'=>true]) !!}

        @include('publicidads.fields')

    {!! Form::close() !!}
</div>
@endsection
