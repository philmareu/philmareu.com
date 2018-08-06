<nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li class="uk-visible@s">
                <a class="uk-navbar-item uk-logo uk-text-uppercase" href="{{ url('/') }}"><span uk-icon="icon: philmareu; ratio: .05;" class="uk-margin-small-right" style="fill: white"></span>Phil Mareu</a>
            </li>
            <li class="uk-hidden@s">
                <a class="uk-navbar-toggle" href="#offcanvas-navigation" uk-toggle>
                    <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Phil Mareu</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="uk-navbar-center uk-visible@s">
        <ul class="uk-navbar-nav">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('blog') }}">Blog</a></li>
            <li><a href="{{ url('projects') }}">Projects</a></li>
            <li><a href="{{ url('about') }}">About</a></li>
        </ul>
    </div>
</nav>

<div id="offcanvas-navigation" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-default">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('blog') }}">Blog</a></li>
            <li><a href="{{ url('projects') }}">Projects</a></li>
            <li><a href="{{ url('about') }}">About</a></li>
        </ul>
    </div>
</div>
