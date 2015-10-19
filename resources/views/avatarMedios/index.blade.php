@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Avatar Medio</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('avatarMedios.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($avatarMedios->isEmpty())
                <div class="well text-center">No avatar_medios found.</div>
            @else
                @include('avatarMedios.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $avatarMedios])


    </div>
@endsection