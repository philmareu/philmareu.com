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

        <ul class="uk-tab uk-flex-center" uk-switcher>
            <li class="uk-active"><a href="">Overview</a></li>
            <li><a href="">Tech Specs</a></li>
            <li><a href="">Posts</a></li>
        </ul>

        <ul class="uk-switcher">
            <li>
                @each('laramanager::objects.render', $project->objects, 'object')
            </li>
            <li>
                
            </li>
            <li>
                @each('blog.list.basic', $project->posts, 'post')
            </li>
        </ul>

        {{--<div class="uk-grid-divider" uk-grid>--}}
            {{--<div class="uk-width-2-3@s">--}}
                {{----}}
            {{--</div>--}}
            {{--<div class="uk-width-1-3@s">--}}
                {{--<h2>Posts</h2>--}}
                {{----}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
@endsection