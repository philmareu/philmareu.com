@extends('layout.layouts.default')

@section('title')
    {{ $post->title }}
@endsection

@section('description')
    {{ $post->summary }}
@endsection

@section('actions')
    @if($post->project_id)
        <a href="{{ url('projects/' . $post->project->slug) }}" class="uk-button uk-button-secondary">View Project</a>
    @endif
@endsection

@section('default-content')
    <div class="uk-container uk-container-small">
        <article class="uk-article" v-pre>

            <p class="uk-article-meta">{{ $post->published_at->format('F dS, Y') }}</p>

            <div class="body">{!! Parsedown::instance()->text($post->body) !!}</div>

        </article>
    </div>
@endsection

@push('scripts-last')
    <script>hljs.initHighlightingOnLoad();</script>
@endpush