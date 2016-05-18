@extends('layouts.default')

@section('title')
    {{ $post->title }}
@endsection

@section('header-text')
    {{ $post->title }}
@endsection

@section('content')

    <div class="uk-block uk-block-muted">
        <div class="uk-container uk-width-medium-1-2 uk-container-center">
            <div class="meta uk-text-muted">Posted on {{ $post->posted_at->format('M jS, Y') }}</div>
            {!! $post->body !!}
        </div>
    </div>

@endsection