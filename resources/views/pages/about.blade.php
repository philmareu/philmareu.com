@extends('layouts.default')

@section('title')
    About
@endsection

@section('header-text')
    <img src="{{ asset('img/pic.png') }}" alt="Phil Mareu Logo" width="100" class="uk-border-circle uk-display-block uk-container-center uk-margin-bottom">
    About Phil Mareu
@endsection

@section('content')

    <div class="uk-block uk-block-muted">
        <div class="uk-container uk-width-medium-1-2 uk-container-center">
            @each('laramanager::objects.render', $page->objects, 'object')
        </div>
    </div>

@endsection