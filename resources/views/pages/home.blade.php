@extends('layouts.home')

@section('title')
    Home
@endsection

@section('meta')
    <meta name="description" content="{{ $page->description }}">
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
            <h2 id="work">Active personal web application projects</h2>
            @each('work.application', $works->applications(), 'work')
        </div>
    </div>

    <a href="http://github.com/philmareu"
       class="uk-button uk-button-large uk-align-center uk-width-medium-1-1 uk-margin-bottom-remove"
            target="_blank">Want to see code? Check out my work on Github <i class="uk-icon-external-link"></i></a>


    <div class="uk-block uk-block-muted">
        <div class="uk-container uk-container-center uk-margin-bottom">
            <h2 id="work">Basic websites I built on Laravel and implements LaraManager</h2>
            @each('work.website', $works->websites(), 'work')
        </div>
    </div>
    <a href="https://philsquare.com/portfolio"
       class="uk-button uk-button-large uk-align-center uk-width-medium-1-1 uk-margin-bottom-remove"
       target="_blank">More websites on philsquare.com <i class="uk-icon-external-link"></i></a>

@endsection