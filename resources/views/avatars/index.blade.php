@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Avatar</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('avatars.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($avatars->isEmpty())
                <div class="well text-center">No avatars found.</div>
            @else
                @include('avatars.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $avatars])


    </div>
@endsection