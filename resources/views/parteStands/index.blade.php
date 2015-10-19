@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">parte_stands</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('parteStands.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($parteStands->isEmpty())
                <div class="well text-center">No parte_stands found.</div>
            @else
                @include('parteStands.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $parteStands])


    </div>
@endsection