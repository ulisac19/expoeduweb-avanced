@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($feria, ['route' => ['ferias.update', $feria->id], 'method' => 'patch', 'files'=>true]) !!}

        @include('ferias.fields')

    {!! Form::close() !!}
</div>
@endsection
