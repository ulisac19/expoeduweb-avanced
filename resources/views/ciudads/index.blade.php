@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">ciudads</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('ciudads.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($ciudads->isEmpty())
                <div class="well text-center">No ciudads found.</div>
            @else
                @include('ciudads.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $ciudads])


    </div>
@endsection