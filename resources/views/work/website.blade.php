<div class="uk-grid">
    <div class="uk-width-medium-1-3">
        <img src="{{ asset('images/primary-work-image/' . $work->primaryImage->filename) }}" alt="{{ $work->primaryImage->alt }}" class="uk-border-circle">
    </div>
    <div class="uk-width-medium-2-3">
        <h3>{{ $work->title }}</h3>
        <p>{{ $work->summary }}</p>
        <a href="{{ $work->url }}"
           class="uk-button uk-button-primary uk-width-medium-1-4"
                target="_blank">View website <i class="uk-icon-external-link"></i></a>
    </div>
</div>