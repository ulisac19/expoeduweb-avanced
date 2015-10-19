@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Avatar Bajo</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('avatarBajos.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($avatarBajos->isEmpty())
                <div class="well text-center">No avatar_bajos found.</div>
            @else
                @include('avatarBajos.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $avatarBajos])


    </div>
@endsection