@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($faq, ['route' => ['faqs.update', $faq->id], 'method' => 'patch']) !!}

        @include('faqs.fields')

    {!! Form::close() !!}
</div>
@endsection
