<div>
    <div class="uk-card uk-card-default uk-grid-collapse uk-margin" uk-grid>
        <div class="uk-card-media-left uk-cover-container uk-width-1-2@s">
            <img src="{{ url('images/original/' . $project->image->filename) }}" alt="" uk-cover>
            <canvas width="600" height="400"></canvas>
        </div>
        <div class="uk-width-1-2@s">
            <div class="uk-card-body">
                <h3 class="uk-card-title">{{ $project->title }}</h3>
                <p>{{ $project->description }}</p>
                <div>
                    <a href="{{ url('projects/' . $project->slug) }}" class="uk-button uk-button-default uk-button-small">Details</a>
                </div>
            </div>
        </div>
    </div>
</div>