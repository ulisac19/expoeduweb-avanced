@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">ferias</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('ferias.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($ferias->isEmpty())
                <div class="well text-center">No ferias found.</div>
            @else
                @include('ferias.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $ferias])


    </div>
@endsection