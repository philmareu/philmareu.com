@extends('layouts.default')

@section('title')
    Blog
@endsection

@section('header-text')
    Blog
@endsection

@section('content')

    <div class="uk-block uk-block-muted">
        <div class="uk-container uk-container-center">
            <div class="uk-grid" data-uk-grid-margin>
                @each('posts.post', $posts, 'post')
            </div>
        </div>
    </div>

@endsection