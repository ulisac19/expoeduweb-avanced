@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">publicidads</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('publicidads.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($publicidads->isEmpty())
                <div class="well text-center">No publicidads found.</div>
            @else
                @include('publicidads.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $publicidads])


    </div>
@endsection