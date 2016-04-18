<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>

@include('partials.navigation')

<header class="uk-block uk-block-large uk-block-primary">
    <div class="uk-text-center uk-container uk-container-center">
        <div><img src="{{ asset('img/logo-small-original.png') }}" alt="Phil Mareu Logo" width="50"></div>
        <h1>Phil Mareu</h1>
        <p>Hi, I’m Phil Mareu. I am a professional web designer and developer with almost 10 years of experience. I strive to build the best UI/UX for web applications and drive it with sensible coding practices and techniques. When I’m not building web things you can find me playing disc golf, hiking or enjoying a tasty beverage while BBQing.</p>
        <p>
            <a href="#"><i class="uk-icon-twitter uk-icon-button"></i></a>
            <a href="#"><i class="uk-icon-twitter uk-icon-button"></i></a>
        </p>
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