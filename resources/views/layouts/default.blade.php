<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    @yield('meta')

    <title>Phil Mareu | @yield('title')</title>

    <link href="{{ asset('img/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ elixir("css/styles.css") }}" rel="stylesheet" media="screen">

    <script src="https://use.typekit.net/kom5ltz.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <script type="text/javascript" charset="utf-8">
        var SITE_URL = "{{ url() }}";
        var csrf = "{{ csrf_token() }}";
    </script>

    @if(env('APP_ENV') == 'production')
        <script>
        </script>
    @endif

    @include('partials.analytics.google')
</head>
<body>

<header>
    @yield('header')
</header>

<div id="content">
    @yield('content')
</div>

<footer>
    @include('partials.footer')
</footer>

<script src="{{ elixir('js/scripts.js') }}"></script>

@yield('scripts')

</body>
</html>