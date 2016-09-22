<div class="uk-width-1-3">
    <h3 class="uk-margin-bottom-remove"><a href="{{ url('blog/' . $post->posted_at->format('Y/m/d') . '/' . $post->slug) }}">{{ $post->title }}</a></h3>
    <p class="uk-text-muted uk-margin-top-remove">{{ $post->posted_at->format('M jS, Y') }}</p>
</div>
