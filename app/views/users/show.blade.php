@extends('layouts.default')

@section('content')
    <h1>{{ $user->username }}</h1>
    <p>Number of Products on Sale: {{ $user->products()->count() }}</p>

    @foreach ($userProducts->chunk(4) as $productSet)
        <div class="row row-no-top-margin">
            @foreach ($productSet as $product)
                <div class="col-md-3">
                    @include('products.partials.productOnUserProfile')
                </div>
            @endforeach
        </div>
    @endforeach

    @include('comments.userComments')

    @if ($signedIn)
        {{ Form::open(['route' => ['user_comment_path'], 'class' => 'comments__create-form']) }}
            {{ Form::hidden('user_id', $user->id) }}
            {{ Form::hidden('commenter_id', $currentUser->id) }}

            <!-- Body Form Input -->
            <div class="form-group">
                {{ Form::textarea('body', null,
                    ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Leave a comment...']) }}
            </div>
        {{ Form::close() }}
    @endif
@stop