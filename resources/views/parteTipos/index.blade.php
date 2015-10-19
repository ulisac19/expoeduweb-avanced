@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">parte_tipos</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('parteTipos.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($parteTipos->isEmpty())
                <div class="well text-center">No parte_tipos found.</div>
            @else
                @include('parteTipos.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $parteTipos])


    </div>
@endsection