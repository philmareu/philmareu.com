@extends('layouts.default')

@section('content')

    <div class="uk-block uk-block-muted">
        <div class="uk-container uk-width-medium-1-2 uk-container-center">
            @each('posts.post', $posts, 'post')
        </div>
    </div>


@endsection