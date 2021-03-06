@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">sucursals</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('sucursals.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($sucursals->isEmpty())
                <div class="well text-center">No sucursals found.</div>
            @else
                @include('sucursals.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $sucursals])


    </div>
@endsection