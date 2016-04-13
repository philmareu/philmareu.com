<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>

@include('partials.navigation')

<header class="uk-block uk-block-large uk-block-primary">
    <div class="uk-text-center">
        <small>I'm</small>
        <h1>Phil Mareu</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi consequatur, debitis eligendi excepturi fugiat illum inventore labore minus nisi, nostrum officia placeat praesentium quos suscipit tenetur ut vero voluptatem.</p>
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