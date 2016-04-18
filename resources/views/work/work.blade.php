<div>
    <a href="{{ url('work/' . $work->slug) }}" class="uk-panel uk-panel-box uk-panel-box-hover">
        <h3 class="uk-panel-title">{{ $work->title }}</h3>
        <div class="uk-panel-teaser uk-margin-top">
            <img src="{{ asset('images/original/' . $work->primaryImage->filename) }}" alt="{{ $work->primaryImage->alt }}">
        </div>
        <p>{{ $work->summary }}</p>
    </a>
</div>