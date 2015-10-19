@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">chats</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('chats.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($chats->isEmpty())
                <div class="well text-center">No chats found.</div>
            @else
                @include('chats.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $chats])


    </div>
@endsection