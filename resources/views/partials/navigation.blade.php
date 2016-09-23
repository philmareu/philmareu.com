<nav class="uk-navbar">
    <ul class="uk-navbar-nav">
        <a href="{{ url('/') }}" class="uk-navbar-brand uk-flex uk-flex-middle"><img src="{{ asset('img/logo-small-grey.png') }}" alt="Phil Mareu Logo" width="25" class="uk-hidden-small"><span class="uk-hidden-large">Phil Mareu</span></a>
    </ul>

    <div class="uk-navbar-flip">
        <ul class="uk-navbar-nav">
            @if($path != "/")
                <li><a href="{{ url('/#work') }}">Work</a></li>
            @else
                <li><a href="{{ url('/#work') }}" data-uk-smooth-scroll>Work</a></li>
            @endif
            <li class="{{ $path == 'blog' ? 'uk-active' : '' }}"><a href="{{ url('blog') }}">Blog</a></li>
            <li class="{{ $path == 'about' ? 'uk-active' : '' }}"><a href="{{ url('about') }}">About</a></li>
        </ul>
        <div class="uk-navbar-content"><a href="{{ url('#contact') }}" class="uk-button">Hire Me</a></div>
    </div>

</nav>