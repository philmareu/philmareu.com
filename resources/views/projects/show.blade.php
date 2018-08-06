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
            <a href="{{ $project->website }}" class="uk-button uk-button-default"><span uk-icon="world" class="uk-margin-small-right"></span>Website</a>
        @endif

        @if($project->github)
            <a href="{{ $project->github }}" class="uk-button uk-button-default"><span uk-icon="github" class="uk-margin-small-right"></span>Github</a>
        @endif
    </div>
@endsection

@section('default-content')
    <div class="uk-container">

        <ul class="uk-tab uk-flex-center" uk-switcher>
            <li class="uk-active"><a href="">Overview</a></li>
            @if($project->tech_specs)
                <li><a href="">Tech Specs</a></li>
            @endif

            @if($project->posts->count())
                <li><a href="">Posts</a></li>
            @endif
        </ul>

        <ul class="uk-switcher">
            <li>
                @each('laramanager::objects.render', $project->objects, 'object')
            </li>
            @if($project->tech_specs)
                <li>
                    {!! Parsedown::instance()->text($project->tech_specs) !!}
                </li>
            @endif

            @if($project->posts->count())
                <li>
                    @each('blog.list.basic', $project->posts, 'post')
                </li>
            @endif
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

@push('scripts-last')
    <script>
        hljs.initHighlightingOnLoad();

        $(function() {
            _.forEach(document.getElementsByTagName('table'), function(element) {
                $(element).addClass('uk-table uk-table-striped uk-table-condensed')
            });
        })
    </script>
@endpush