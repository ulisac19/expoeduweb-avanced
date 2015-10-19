@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">datos_stands</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('datosStands.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($datosStands->isEmpty())
                <div class="well text-center">No datos_stands found.</div>
            @else
                @include('datosStands.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $datosStands])


    </div>
@endsection