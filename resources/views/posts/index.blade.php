@extends('layouts.default')

@section('title')
    Blog
@endsection

@section('header-text')
    <figure class="uk-overlay">
        <img src="{{ asset('img/header-blog.jpg') }}" alt="Blog header image" class="uk-hidden-small">
        <figcaption class="uk-overlay-panel uk-flex uk-flex-middle">
            <div class="uk-container uk-container-center">
                <h1>Blog</h1>
            </div>
        </figcaption>
    </figure>
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