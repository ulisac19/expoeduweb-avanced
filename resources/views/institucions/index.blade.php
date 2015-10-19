@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">institucions</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('institucions.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($institucions->isEmpty())
                <div class="well text-center">No institucions found.</div>
            @else
                @include('institucions.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $institucions])


    </div>
@endsection