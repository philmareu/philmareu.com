@extends('layout.layouts.default')

@section('title')
    {{ $post->title }}
@endsection

@section('description')
    {{ $post->summary }}
@endsection

@section('default-content')
    <div class="uk-container uk-container-small">
        <article class="uk-article" v-pre>

            <p class="uk-article-meta">{{ $post->published_at->format('F dS, Y') }}</p>

            <div class="body">{!! Parsedown::instance()->text($post->body) !!}</div>

        </article>
    </div>
@endsection