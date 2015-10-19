@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">datos</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('datos.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($datos->isEmpty())
                <div class="well text-center">No datos found.</div>
            @else
                @include('datos.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $datos])


    </div>
@endsection