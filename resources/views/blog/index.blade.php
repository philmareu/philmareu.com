@extends('laramanager::layouts.sub.default')

@section('title')
    Posts
@endsection

@section('app-classes')
    uk-offcanvas-content
@endsection

@section('description')
    I write about development as well as design.
@endsection

@section('actions')
    {{--<button type="button" class="uk-button uk-button-default" uk-toggle="target: #offcanvas-tags">Tags</button>--}}
@endsection

@section('content')
    @include('partials.headers.default')

    <div class="uk-container">
        @each('partials.articles.list.basic', $posts, 'post')

        {!! $posts->render() !!}
    </div>

    {{--<div id="offcanvas-tags" uk-offcanvas="flip: true;">--}}
        {{--<div class="uk-offcanvas-bar">--}}

            {{--<button class="uk-offcanvas-close" type="button" uk-close></button>--}}

            {{--<ul class="uk-nav uk-nav-default">--}}
                {{--<li class="uk-nav-header">Tags</li>--}}
                {{--<li><a href="">Laravel/PHP</a></li>--}}
                {{--<li><a href="">Mapbox</a></li>--}}
                {{--<li><a href="">Stripe</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection

@push('scripts-last')
    <script>
        $('.pagination').attr('class', 'uk-pagination');
    </script>
@endpush