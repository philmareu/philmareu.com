@extends('layouts.home')

@section('title')
    Home
@endsection

@section('content')

    <div class="uk-container uk-width-medium-1-2 uk-container-center">
        <h2>Recent Posts</h2>
        @each('posts.post', $posts, 'post')

        <h2 id="work">Select Work</h2>
        <div class="uk-grid uk-grid-width-medium-1-2" data-uk-grid-margin data-uk-grid-match="{target:'.uk-panel'}">
            @each('work.work', $works, 'work')
        </div>
    </div>

@endsection