@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($stand, ['route' => ['stands.update', $stand->id], 'method' => 'patch']) !!}

        @include('stands.fields')

    {!! Form::close() !!}
</div>
@endsection
