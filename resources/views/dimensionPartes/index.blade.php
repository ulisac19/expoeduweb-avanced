@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">dimension_partes</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('dimensionPartes.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($dimensionPartes->isEmpty())
                <div class="well text-center">No dimension_partes found.</div>
            @else
                @include('dimensionPartes.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $dimensionPartes])


    </div>
@endsection