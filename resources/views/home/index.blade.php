@extends('laramanager::layouts.sub.default')

@section('title')
    Home
@endsection

@section('description')
    I travel full-time, blog about building web projects and <a href="https://mareulife.com">#mareulife</a>, and work as a freelance web application developer and designer.
@endsection

@section('content')

    <div class="uk-margin-large-bottom">
        @include('partials.headers.home')

        <div class="uk-container uk-container-small uk-text-center">
            @each('blog.list.basic', $posts, 'post')

            <a href="{{ url('blog') }}" class="uk-button uk-button-secondary uk-margin">View Blog</a>
        </div>
    </div>

    @include('layout.footers.default')

@endsection