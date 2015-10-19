@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Avatar Alto</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('avatarAltos.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($avatarAltos->isEmpty())
                <div class="well text-center">No avatar_altos found.</div>
            @else
                @include('avatarAltos.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $avatarAltos])


    </div>
@endsection