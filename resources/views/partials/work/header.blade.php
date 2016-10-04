<figure class="uk-overlay">
    <img src="{{ url('images/original/' . $work->logoImage->filename) }}" alt="Home page header image" class="uk-hidden-small">
    <figcaption class="uk-overlay-panel uk-flex uk-flex-middle">
        <div class="uk-container uk-container-center">
            <h1>{{ $work->title }}</h1>
            <p>{{ $work->summary }}</p>
        </div>
    </figcaption>
</figure>