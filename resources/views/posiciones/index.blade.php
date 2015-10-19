@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">posiciones</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('posiciones.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($posiciones->isEmpty())
                <div class="well text-center">No posiciones found.</div>
            @else
                @include('posiciones.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $posiciones])


    </div>
@endsection