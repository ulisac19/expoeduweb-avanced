@extends('app')

@section('breadcump')
{!! Breadcrumbs::render('home', 'about	') !!}
@endsection

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'colors.store']) !!}

        @include('colors.fields')

    {!! Form::close() !!}
</div>
@endsection
