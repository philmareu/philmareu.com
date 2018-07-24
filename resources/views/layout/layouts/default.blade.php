@extends('laramanager::layouts.sub.default')

@section('content')
    @include('partials.headers.default')

    <div class="uk-margin-large-bottom">
        @yield('default-content')
    </div>

    @include('layout.footers.default')
@endsection