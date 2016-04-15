<nav class="uk-navbar">
    <div class="uk-container uk-container-center">
        <ul class="uk-navbar-nav">
            <a href="{{ url('/') }}" class="uk-navbar-brand uk-flex uk-flex-middle"><img src="{{ asset('img/logo-small-original.png') }}" alt="Phil Mareu Logo" width="25"></a>
        </ul>

        <div class="uk-navbar-flip">
            <ul class="uk-navbar-nav">
                <li><a href="{{ url('work') }}">Work</a></li>
                <li><a href="{{ url('about') }}">About</a></li>
                <li><a href="{{ url('contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>