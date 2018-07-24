@extends('layout.layouts.default')

@section('title')
    {{ $project->title }}
@endsection

@section('description')
    {{ $project->description }}
@endsection

@section('actions')
    <div class="uk-text-center">
        @if($project->website)
            <a href="{{ $project->website }}" class="uk-button uk-button-default">Website</a>
        @endif

        @if($project->github)
            <a href="{{ $project->github }}" class="uk-button uk-button-default">Github</a>
        @endif
    </div>
@endsection

@section('default-content')
    <div class="uk-container">
        <div class="uk-child-width-1-2@s uk-grid-divider" uk-grid>
            <div>
                <h2>Posts</h2>
                @each('blog.list.basic', $project->posts, 'post')
            </div>
            <div>
                <h2>Screenshots</h2>
                <div class="uk-child-width-1-2@s" uk-grid>
                    <div><img src="https://picsum.photos/300" alt=""></div>
                    <div><img src="https://picsum.photos/300" alt=""></div>
                    <div><img src="https://picsum.photos/300" alt=""></div>
                    <div><img src="https://picsum.photos/300" alt=""></div>
                    <div><img src="https://picsum.photos/300" alt=""></div>
                    <div><img src="https://picsum.photos/300" alt=""></div>
                    <div><img src="https://picsum.photos/300" alt=""></div>
                </div>
            </div>
        </div>
    </div>
@endsection