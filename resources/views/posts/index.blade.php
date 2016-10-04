@extends('layouts.default')

@section('title')
    Blog
@endsection

@section('meta')
    <meta name="description" content="A blog by Phil Mareu about web development. It covers a variety of topics such as new and current projects, PHP, Laravel, refactoring and general coding techniques.">
@endsection

@section('header-text')
    <figure class="uk-overlay">
        <img src="{{ asset('img/header-blog.jpg') }}" alt="Blog header image" class="uk-hidden-small">
        <figcaption class="uk-overlay-panel uk-flex uk-flex-middle">
            <div class="uk-container uk-container-center">
                <h1>Blog</h1>
                <p>A blog by Phil Mareu about web development. It covers a variety of topics such as new and current projects, PHP, Laravel, refactoring and general coding techniques.</p>
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