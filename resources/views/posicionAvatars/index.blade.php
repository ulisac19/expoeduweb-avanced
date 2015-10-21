@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">posicion_avatars</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('posicionAvatars.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($posicionAvatars->isEmpty())
                <div class="well text-center">No posicion_avatars found.</div>
            @else
                @include('posicionAvatars.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $posicionAvatars])


    </div>
@endsection