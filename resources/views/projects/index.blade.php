@extends('layout.layouts.default')

@section('title')
Projects
@endsection

@section('description')

@endsection

@section('actions')
    {{--<button type="button" class="uk-button uk-button-default" uk-toggle="target: #offcanvas-tags">Tags</button>--}}
@endsection

@section('default-content')
    <div class="uk-container">
        @foreach($projects as $project)
            <div class="uk-margin-large" uk-grid>
                <div class="uk-width-1-3">
                    <img src="{{ url('images/original/' . $project->image->filename) }}" alt="">
                </div>
                <div class="uk-width-2-3">
                    <h3>{{ $project->title }}</h3>
                    <p>{{ $project->description }}</p>
                    <div class="uk-margin">
                        <a href="{{ url('projects/' . $project->slug) }}" class="uk-button uk-button-default uk-button-small">Details</a>
                    </div>
                    <div>
                        @foreach($project->tags as $tag)
                            <span class="uk-badge">{{ $tag->title }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection