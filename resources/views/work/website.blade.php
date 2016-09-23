<div class="uk-grid">
    <div class="uk-width-medium-2-3 uk-push-1-3">
        <h3>{{ $work->title }}</h3>
        <p>{{ $work->summary }}</p>
        <a href="{{ url('work/' . $work->slug) }}" class="uk-button uk-button-primary uk-width-medium-1-4">Learn More</a>
    </div>
    <div class="uk-width-medium-1-3 uk-pull-2-3">
        <img src="{{ asset('images/primary-work-image/' . $work->primaryImage->filename) }}" alt="{{ $work->primaryImage->alt }}">
    </div>
</div>