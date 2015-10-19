@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'parteStands.store']) !!}

        @include('parteStands.fields')

    {!! Form::close() !!}
</div>
@endsection
