@extends('laramanager::layouts.sub.default')

@section('content')

    <nav class="uk-navbar-container" uk-navbar>
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li><a href="">Home</a></li>
                <li><a href="">Projects</a></li>
                <li><a href="">Videos</a></li>
                <li><a href="">Posts</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Hire Me</a></li>
            </ul>
        </div>
    </nav>

    <header class="uk-text-center uk-section uk-section-default">
        <h1>Phil Mareu</h1>
    </header>

    <section class="uk-section uk-section-muted">
        <div class="uk-container">
            <h2>Recent Videos</h2>
        </div>
    </section>

    <section class="uk-section uk-section-default">
        <div class="uk-container">
            <h2>Recent Posts</h2>
        </div>
    </section>

    <footer class="uk-section uk-section-primary">
        Phil Mareu
    </footer>
@endsection