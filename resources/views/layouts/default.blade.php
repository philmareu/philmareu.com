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

<footer>
    @include('partials.footer')
</footer>

<script src="{{ elixir('js/scripts.js') }}"></script>

@yield('scripts')

</body>
</html>