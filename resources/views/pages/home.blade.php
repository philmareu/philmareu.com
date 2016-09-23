@extends('layouts.home')

@section('title')
    Home
@endsection

@section('content')

    <div class="uk-block uk-block-muted">
        <div class="uk-container uk-container-center uk-margin-bottom">
            <h2>Recent Posts</h2>
            <div class="uk-grid" data-uk-grid-margin="{target:'.uk-panel'}">
                @each('posts.post', $posts, 'post')
            </div>
        </div>
    </div>
    <a href="{{ url('blog') }}" class="uk-button uk-button-large uk-align-center uk-width-medium-1-1 uk-margin-bottom-remove"><i class="uk-icon-pencil"></i> Visit my Blog</a>

    <div class="uk-block uk-block-default uk-margin-top-remove">
        <div class="uk-container uk-container-center uk-margin-bottom">
            <h2 id="work">Web applications I designed and developed from scratch</h2>
            @each('work.application', $works->applications(), 'work')
        </div>
    </div>
    <a href="{{ url('blog') }}" class="uk-button uk-button-large uk-align-center uk-width-medium-1-1 uk-margin-bottom-remove">View code and more on Github <i class="uk-icon-external-link"></i></a>

    <div class="uk-block uk-block-muted">
        <div class="uk-container uk-container-center uk-margin-bottom">
            <h2 id="work">Some of my favorite websites I designed and developed from scratch</h2>
            @each('work.website', $works->websites(), 'work')
        </div>
    </div>
    <a href="https://philsquare.com"
       class="uk-button uk-button-large uk-align-center uk-width-medium-1-1 uk-margin-bottom-remove"
       target="_blank">More websites on philsquare.com <i class="uk-icon-external-link"></i></a>

@endsection