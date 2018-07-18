@extends('laramanager::layouts.sub.default')

@section('title')
    Home
@endsection

@section('description')
    I travel full-time, blog about building web projects and <a href="https://mareulife.com">#mareulife</a>, and work as a freelance web application developer and designer.
@endsection

@section('content')

    @include('partials.headers.home')

    <div class="uk-container">
        @each('partials.articles.list.basic', $posts, 'post')
    </div>
@endsection