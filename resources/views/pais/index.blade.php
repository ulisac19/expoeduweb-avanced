@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">pais</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('pais.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($pais->isEmpty())
                <div class="well text-center">No pais found.</div>
            @else
                @include('pais.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $pais])


    </div>
@endsection