@extends('laramanager::layouts.sub.default')

@section('title')
    Posts
@endsection

@section('app-classes')
    uk-offcanvas-content
@endsection

@section('description')
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad aperiam cum cumque delectus est fugit in, incidunt minus natus nemo non optio quae reiciendis sapiente, tempore totam vero voluptatum.
@endsection

@section('actions')
    <button type="button" class="uk-button uk-button-default" uk-toggle="target: #offcanvas-tags">Tags</button>
@endsection

@section('content')
    @include('partials.headers.default')

    <div class="uk-container">
        <div class="uk-child-width-1-3@s" uk-grid>
            @each('partials.articles.list.card', [[], [], []], 'article')
        </div>
    </div>

    <div id="offcanvas-tags" uk-offcanvas="flip: true;">
        <div class="uk-offcanvas-bar">

            <button class="uk-offcanvas-close" type="button" uk-close></button>

            <ul class="uk-nav uk-nav-default">
                <li class="uk-nav-header">Tags</li>
                <li><a href="">Laravel/PHP</a></li>
                <li><a href="">Mapbox</a></li>
                <li><a href="">Stripe</a></li>
            </ul>
        </div>
    </div>
@endsection