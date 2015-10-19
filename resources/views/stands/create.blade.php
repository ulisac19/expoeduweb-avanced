@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'stands.store']) !!}

        @include('stands.fields')

    {!! Form::close() !!}
</div>
@endsection
