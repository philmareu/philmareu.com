@extends('laramanager::layouts.sub.default')

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

@section('content')
    @include('partials.headers.default')

    <div class="uk-container">
        <div class="uk-grid-divider" uk-grid>
            <div class="uk-width-2-3@s">
                @each('blog.list.basic', $project->posts, 'post')
            </div>
            <div class="uk-width-1-3@s">
                <div uk-margin>
                    <span class="uk-badge">Laravel/PHP</span>
                    <span class="uk-badge">Mapbox</span>
                    <span class="uk-badge">Stripe</span>
                    <span class="uk-badge">Darksky API</span>
                    <span class="uk-badge">Laravel/PHP</span>
                    <span class="uk-badge">Laravel/PHP</span>
                    <span class="uk-badge">Laravel/PHP</span>
                    <span class="uk-badge">Laravel/PHP</span>
                </div>
                <hr>
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