@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">caras</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('caras.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($caras->isEmpty())
                <div class="well text-center">No caras found.</div>
            @else
                @include('caras.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $caras])


    </div>
@endsection