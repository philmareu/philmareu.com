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
                        <span class="uk-badge">Laravel</span>
                        <span class="uk-badge">Vue</span>
                        <span class="uk-badge">Stripe</span>
                        <span class="uk-badge">Mapbox</span>
                        <span class="uk-badge">Algolia</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection