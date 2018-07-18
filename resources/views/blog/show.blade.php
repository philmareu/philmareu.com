@extends('laramanager::layouts.sub.default')

@section('title')
    {{ $post->title }}
@endsection

@section('description')
    {{ $post->summary }}
@endsection

@section('content')
    @include('partials.headers.default')

    <div class="uk-container">
        <article class="uk-article" v-pre>

            <p class="uk-article-meta">{{ $post->published_at->format('F dS, Y') }}</p>

            <div class="body">{!! Parsedown::instance()->text($post->body) !!}</div>

        </article>
    </div>
@endsection