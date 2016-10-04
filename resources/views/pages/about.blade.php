@extends('layouts.default')

@section('title')
    About
@endsection

@section('header-text')
    <figure class="uk-overlay">
        <img src="{{ asset('img/header-about.jpg') }}" alt="Blog header image" class="uk-hidden-small">
        <figcaption class="uk-overlay-panel uk-flex uk-flex-middle">
            <div class="uk-container uk-container-center">
{{--                <img src="{{ asset('img/pic.png') }}" alt="Phil Mareu Logo" width="100" class="uk-border-circle">--}}
                <h1>About Phil Mareu</h1>
                <p>Hi, I’m Phil Mareu. I am a professional web designer and developer with almost 10 years of experience. I strive to build the best UI/UX for web applications and drive it with sensible coding practices and techniques. When I’m not building web things you can find me playing disc golf, hiking, or enjoying a tasty beverage while BBQing.</p>
            </div>
        </figcaption>
    </figure>
@endsection

@section('content')

    <div class="uk-block uk-block-muted">
        <div class="uk-container uk-width-medium-1-2 uk-container-center">
            @each('laramanager::objects.render', $page->objects, 'object')
        </div>
    </div>

@endsection