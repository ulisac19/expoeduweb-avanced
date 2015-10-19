@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">carreras</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('carreras.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($carreras->isEmpty())
                <div class="well text-center">No carreras found.</div>
            @else
                @include('carreras.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $carreras])


    </div>
@endsection