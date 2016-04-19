<nav class="uk-navbar">
    <div class="nav-container">
        <ul class="uk-navbar-nav">
            <a href="{{ url('/') }}" class="uk-navbar-brand uk-flex uk-flex-middle"><img src="{{ asset('img/logo-small-grey.png') }}" alt="Phil Mareu Logo" width="25"></a>
        </ul>

        <div class="uk-navbar-flip">
            <ul class="uk-navbar-nav">
                @if($path != "/")
                    <li><a href="{{ url('/#work') }}">Work</a></li>
                @else
                    <li><a href="{{ url('/#work') }}" data-uk-smooth-scroll>Work</a></li>
                @endif
                <li class="{{ $path == 'about' ? 'uk-active' : '' }}"><a href="{{ url('about') }}">About</a></li>
                <li><a href="{{ url('#contact') }}" data-uk-smooth-scroll>Contact</a></li>
            </ul>
        </div>
    </div>
</nav>