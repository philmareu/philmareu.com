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
        @foreach($posts as $post)
            <article class="uk-article">

                <h1 class="uk-article-title"><a class="uk-link-reset" href="{{ url('blog/' . $post->published_at->format('Y/m/d/') . '/' . $post->slug) }}">{{ $post->title }}</a></h1>

                <p class="uk-article-meta">{{ $post->published_at->format('F dS, Y') }}</p>

                <p class="uk-text-lead">{{ $post->summary }}</p>

                <div class="uk-grid-small uk-child-width-auto" uk-grid>
                    <div>
                        <a class="uk-button uk-button-text" href="{{ url('blog/' . $post->published_at->format('Y/m/d/') . '/' . $post->slug) }}">Read more</a>
                    </div>
                </div>

            </article>
        @endforeach
    </div>
@endsection