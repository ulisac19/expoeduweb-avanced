@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">posicion_stands</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('posicionStands.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($posicionStands->isEmpty())
                <div class="well text-center">No posicion_stands found.</div>
            @else
                @include('posicionStands.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $posicionStands])


    </div>
@endsection