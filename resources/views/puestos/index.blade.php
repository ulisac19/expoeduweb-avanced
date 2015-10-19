@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">puestos</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('puestos.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($puestos->isEmpty())
                <div class="well text-center">No puestos found.</div>
            @else
                @include('puestos.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $puestos])


    </div>
@endsection