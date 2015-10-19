@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">stands</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('stands.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($stands->isEmpty())
                <div class="well text-center">No stands found.</div>
            @else
                @include('stands.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $stands])


    </div>
@endsection