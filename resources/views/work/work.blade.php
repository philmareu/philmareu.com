<div>
    <div class="uk-panel uk-panel-box">
        <div class="uk-panel-teaser">
            <img src="{{ asset('images/original/' . $work->primaryImage->filename) }}" alt="{{ $work->primaryImage->alt }}">
        </div>
        <h3 class="uk-panel-title">{{ $work->title }}</h3>
        <p>{{ $work->summary }}</p>
    </div>
    <div class="uk-panel-teaser">
        <a href="{{ url('work/' . $work->slug) }}" class="uk-button uk-width-1-1">Learn More</a>
    </div>
</div>