<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>

@include('partials.navigation')

<header class="uk-block uk-block-primary">
    <div class="uk-text-center uk-width-2-3 uk-container-center">
        {{--<div><img src="{{ asset('img/logo-small-grey.png') }}" alt="Phil Mareu Logo" width="50"></div>--}}
        <div><img src="{{ asset('img/pic.png') }}" alt="Phil Mareu Logo" width="100" class="uk-border-circle"></div>
        <h1>Phil Mareu</h1>
        <p>Hi, I’m Phil Mareu. I am a professional web designer and developer with almost 10 years of experience. I strive to build the best UI/UX for web applications and drive it with sensible coding practices and techniques. When I’m not building web things you can find me playing disc golf, hiking or enjoying a tasty beverage while BBQing.</p>
        <p>
            <a href="http://twitter.com/philmareu"><i class="uk-icon-twitter uk-icon-button"></i></a>
            <a href="http://github.com/philmareu"><i class="uk-icon-github uk-icon-button"></i></a>
            <a href="https://www.linkedin.com/in/philmareu"><i class="uk-icon-linkedin uk-icon-button"></i></a>
            <a href="https://www.instagram.com/philmareu/"><i class="uk-icon-instagram uk-icon-button"></i></a>
        </p>
    </div>
</header>

<div id="content">
    @yield('content')
</div>

<footer class="uk-block uk-block-secondary">
</footer>

<script src="{{ elixir('js/scripts.js') }}"></script>

@yield('scripts')

</body>
</html>