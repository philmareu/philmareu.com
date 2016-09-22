@extends('layouts.home')

@section('title')
    Home
@endsection

@section('content')

    <div class="uk-block uk-block-muted">
        <div class="uk-container uk-container-center uk-margin-bottom">
            <h2>Recent Posts</h2>
            <div class="uk-grid" data-uk-grid-margin>
                @each('posts.post', $posts, 'post')
            </div>
        </div>
    </div>
    <a href="{{ url('blog') }}" class="uk-button uk-button-primary uk-button-large uk-align-center uk-width-medium-1-1">Visit my Blog</a>

    <div class="uk-block uk-block-default">
        <div class="uk-container uk-container-center uk-margin-bottom">
            <h2 id="work">Web applications I designed and developed from scratch</h2>
            @each('work.application', $works, 'work')
        </div>
    </div>
    <a href="{{ url('blog') }}" class="uk-button uk-button-primary uk-button-large uk-align-center uk-width-medium-1-1">View code and more on Github <i class="uk-icon-external-link"></i></a>

    <div class="uk-block uk-block-muted">
        <div class="uk-container uk-container-center uk-margin-bottom">
            <h2 id="work">Some of my favorite websites I designed and developed from scratch</h2>
            @each('work.website', $works, 'work')
        </div>
    </div>
    <a href="https://philsquare.com"
       class="uk-button uk-button-primary uk-button-large uk-align-center uk-width-medium-1-1"
       target="_blank">More website work shown on philsquare.com <i class="uk-icon-external-link"></i></a>

@endsection