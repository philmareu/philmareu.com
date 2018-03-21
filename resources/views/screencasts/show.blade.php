@extends('laramanager::layouts.sub.default')

@section('title')
    Screencast
@endsection

@section('description')
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad aperiam cum cumque delectus est fugit in, incidunt minus natus nemo non optio quae reiciendis sapiente, tempore totam vero voluptatum.
@endsection

@section('actions')
    <a href="" class="uk-button uk-button-default">View Project</a>
@endsection

@section('content')
    @include('partials.headers.default')

    <div class="uk-container">
        <div class="uk-text-center uk-margin">
            <iframe src="https://www.youtube.com/embed/4p85lZjb8uo" width="800" height="475" frameborder="0" allowfullscreen uk-responsive></iframe>
        </div>
    </div>
@endsection