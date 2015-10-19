@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">estados</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('estados.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($estados->isEmpty())
                <div class="well text-center">No estados found.</div>
            @else
                @include('estados.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $estados])


    </div>
@endsection