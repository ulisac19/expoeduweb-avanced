@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'faqs.store']) !!}

        @include('faqs.fields')

    {!! Form::close() !!}
</div>
@endsection
