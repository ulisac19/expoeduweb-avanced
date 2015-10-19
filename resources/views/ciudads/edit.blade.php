@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($ciudad, ['route' => ['ciudads.update', $ciudad->id], 'method' => 'patch']) !!}

        @include('ciudads.fields')

    {!! Form::close() !!}
</div>
@endsection
