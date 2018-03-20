@extends('laramanager::layouts.sub.default')

@section('content')

    <header>
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li><a href=""><span uk-icon="icon: star; ratio: 1.5;" class="uk-margin-small-right"></span>Phil Mareu</a></li>
                </ul>
            </div>

            <div class="uk-navbar-center">
                <ul class="uk-navbar-nav">
                    <li><a href="">Home</a></li>
                    <li><a href="">Projects</a></li>
                    <li><a href="">Videos</a></li>
                    <li><a href="">Posts</a></li>
                    <li><a href="">Work</a></li>
                    <li><a href="">About</a></li>
                </ul>
            </div>

            <div class="uk-navbar-right">
                <div class="uk-navbar-item">
                    <a href="" class="uk-button uk-button-primary uk-button-small">Hire Me</a>
                </div>
            </div>
        </nav>

        <section class="uk-section uk-section-default uk-text-center uk-margin-large-bottom">
            <div class="uk-container">
                <div class="uk-heading-hero">Code & Design</div>
                <p class="uk-text-large">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci culpa maxime odit possimus quod. Cupiditate debitis deserunt doloribus et ipsam laudantium libero minima molestiae odit praesentium quasi, repellat similique tenetur!</p>
                <div class="uk-text-center">
                    <a href=""><span uk-icon="icon: twitter;" class="uk-margin-small-right"></span></a>
                    <a href=""><span uk-icon="icon: github;" class="uk-margin-small-right"></span></a>
                    <a href=""><span uk-icon="icon: dribbble;" class="uk-margin-small-right"></span></a>
                    <a href=""><span uk-icon="icon: behance;" class="uk-margin-small-right"></span></a>
                    <a href=""><span uk-icon="icon: linkedin;" class="uk-margin-small-right"></span></a>
                    <a href=""><span uk-icon="icon: mail;" class="uk-margin-small-right"></span></a>
                </div>
            </div>
        </section>

    </header>

    <hr>

    <h2>Recent </h2>
@endsection