<nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li><a href="{{ url('/') }}">Phil Mareu</a></li>
        </ul>
    </div>

    <div class="uk-navbar-center">
        <ul class="uk-navbar-nav">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('blog') }}">Posts</a></li>
            <li><a href="{{ url('about') }}">About</a></li>
        </ul>
    </div>

    <div class="uk-navbar-right">
        <div class="uk-navbar-item">
            {{--<a href="{{ url('hire') }}" class="uk-button uk-button-primary uk-button-small">Hire Me</a>--}}
        </div>
    </div>
</nav>