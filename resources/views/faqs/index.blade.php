@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">faqs</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('faqs.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($faqs->isEmpty())
                <div class="well text-center">No faqs found.</div>
            @else
                @include('faqs.table')
            @endif
        </div>

<?php /* ?>
        @include('common.paginate', ['records' => $faqs])
<?php */ ?>

    </div>
@endsection