@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'ciudads.store']) !!}

        @include('ciudads.fields')

    {!! Form::close() !!}
</div>
@endsection
