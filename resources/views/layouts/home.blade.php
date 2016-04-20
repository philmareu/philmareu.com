<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>

@include('laraform::alerts.default')

@include('partials.navigation')

<header class="uk-block uk-block-primary">
    <div class="uk-text-center uk-container uk-width-medium-2-3 uk-container-center">
        <div><img src="{{ asset('img/logo-small-grey.png') }}" alt="Phil Mareu Logo" width="50"></div>
        <h1>Phil Mareu</h1>
        <p>Hi, I’m Phil Mareu. I am a professional web designer and developer with almost 10 years of experience. I strive to build the best UI/UX for web applications and drive it with sensible coding practices and techniques. When I’m not building web things you can find me playing disc golf, hiking or enjoying a tasty beverage while BBQing.</p>
        <p>
            <a href="http://twitter.com/philmareu"><i class="uk-icon-twitter uk-icon-button"></i></a>
            <a href="http://github.com/philmartinez"><i class="uk-icon-github uk-icon-button"></i></a>
            <a href="https://www.linkedin.com/in/philmareu"><i class="uk-icon-linkedin uk-icon-button"></i></a>
            <a href="https://www.instagram.com/philmareu/"><i class="uk-icon-instagram uk-icon-button"></i></a>
            <a href="mailto:philmareu@gmail.com"><i class="uk-icon-envelope uk-icon-button"></i></a>
        </p>
    </div>
</header>

<div id="content">
    @yield('content')
</div>

<footer class="uk-block">
    <div class="uk-container uk-width-medium-1-2 uk-container-center">
        @include('partials.footer')
    </div>
</footer>

<script src="{{ elixir('js/scripts.js') }}"></script>

@yield('scripts')

</body>
</html>