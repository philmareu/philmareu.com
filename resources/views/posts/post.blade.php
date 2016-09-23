<div class="uk-width-medium-1-2">
    <div class="uk-panel uk-panel-box">
        <div class="uk-panel-teaser">
            <pre><code>{{ $post->header_code }}</code></pre>
        </div>
        <h3 class="uk-margin-remove"><a href="{{ url('blog/' . $post->posted_at->format('Y/m/d') . '/' . $post->slug) }}">{{ $post->title }}</a></h3>
        <p class="uk-text-muted uk-margin-top-remove">{{ $post->posted_at->format('M jS, Y') }}</p>
    </div>
</div>