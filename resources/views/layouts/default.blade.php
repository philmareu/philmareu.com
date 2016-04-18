<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>

@include('laraform::alerts.default')

@include('partials.navigation')

<header class="uk-block uk-block-primary">
    <div class="uk-text-center uk-container uk-container-center">
        <h1>
            @yield('header-text')
        </h1>
    </div>
</header>

<div id="content">
    @yield('content')
</div>

<footer class="uk-block">
    <div class="uk-width-medium-1-2 uk-container-center">
        @include('partials.footer')
    </div>
</footer>

<script src="{{ elixir('js/scripts.js') }}"></script>

@yield('scripts')

</body>
</html>