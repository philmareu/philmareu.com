@extends('layouts.default')

@section('title')
    About
@endsection

@section('meta')
    <meta name="description" content="{{ $page->description }}">
@endsection

@section('header-text')
    <figure class="uk-overlay">
        <img src="{{ asset('img/header-about.jpg') }}" alt="Blog header image" class="uk-hidden-small">
        <figcaption class="uk-overlay-panel uk-flex uk-flex-middle">
            <div class="uk-container uk-container-center">
                <h1>About Phil Mareu</h1>
                <p>{{ $page->description }}</p>
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