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

    <script type="text/javascript" charset="utf-8">
        var SITE_URL = "{{ url() }}";
        var csrf = "{{ csrf_token() }}";
    </script>

    @if(env('APP_ENV') == 'production')
        <script>
        </script>
    @endif
</head>
<body>

<header>
    <div class="uk-grid uk-flex uk-flex-middle">
        <div class="uk-width-1-6">
            <img src="{{ asset('img/logo-small-original.png') }}" alt="Phil Mareu Logo" width="50">
        </div>
        <div class="uk-width-2-3 uk-text-center">
            <nav>
                <a href="#">About</a>
                <a href="#">Blog</a>
                <a href="#">Projects</a>
            </nav>
        </div>
        <div class="uk-width-1-6 uk-text-right">
            <a href="#" class="uk-button">Hire Me</a>
        </div>
    </div>

    <div class="uk-text-center">
        <img src="{{ asset('img/pic.png') }}" alt="" class="uk-border-circle" width="100">
        <h1>Phil Mareu</h1>
    </div>
</header>

<div id="content">
    @yield('content')
</div>

<footer>
</footer>

<script src="{{ elixir('js/scripts.js') }}"></script>

@yield('scripts')

</body>
</html>