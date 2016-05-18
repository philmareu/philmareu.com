@extends('layouts.default')

@section('title')
    {{ $page->title }}
@endsection

@section('header-text')
    {{ $page->title }}
@endsection

@section('content')

    <div class="uk-block uk-block-muted">
        <div class="uk-width-1-2 uk-container-center">
            @each('laramanager::objects.render', $page->objects, 'object')
        </div>
    </div>

@endsection