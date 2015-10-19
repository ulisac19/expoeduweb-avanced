@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">tipo_stands</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('tipoStands.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($tipoStands->isEmpty())
                <div class="well text-center">No tipo_stands found.</div>
            @else
                @include('tipoStands.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $tipoStands])


    </div>
@endsection