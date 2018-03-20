@extends('laramanager::layouts.sub.default')

@section('title')
    Screencasts
@endsection

@section('description')
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad aperiam cum cumque delectus est fugit in, incidunt minus natus nemo non optio quae reiciendis sapiente, tempore totam vero voluptatum.
@endsection

@section('content')
    @include('partials.headers.default')

    <div class="uk-container">
        <div class="uk-child-width-1-3@s" uk-grid>
            @each('partials.cards.screencast', [[], [], []], 'screencast')
        </div>
    </div>
@endsection