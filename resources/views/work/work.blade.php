<div>
    <div class="uk-panel uk-panel-box">
        <h3 class="uk-panel-title">{{ $work->title }}</h3>
        <div class="uk-panel-teaser uk-margin-top">
            <img src="{{ asset('images/original/' . $work->primaryImage->filename) }}" alt="{{ $work->primaryImage->alt }}">
        </div>
        <p>{{ $work->summary }}</p>
    </div>
    <div class="uk-panel-teaser">
        <a href="{{ url('work/' . $work->slug) }}" class="uk-button uk-width-1-1">Learn More</a>
    </div>
</div>