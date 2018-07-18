@extends('laramanager::layouts.sub.default')

@section('title')
    Work
@endsection

@section('description')
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad aperiam cum cumque delectus est fugit in, incidunt minus natus nemo non optio quae reiciendis sapiente, tempore totam vero voluptatum.
@endsection

@section('content')
    @include('partials.headers.default')

    <div class="uk-container">
        <div class="uk-child-width-1-2@s" uk-grid>
            @each('partials.cards.work', [[], [], []], 'work')
        </div>
    </div>
@endsection