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
        <div class="uk-child-width-1-2@s" uk-grid>
            @each('projects.card', $projects, 'project')
        </div>
    </div>
@endsection