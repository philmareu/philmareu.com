<article class="uk-article">
    <h3><a class="uk-link-reset" href="{{ url('blog/' . $post->published_at->format('Y/m/d/') . $post->slug) }}">{{ $post->title }}</a></h3>
    <p>{{ $post->summary }}</p>
    <p class="uk-article-meta">{{ $post->published_at->format('F jS, Y') }}</p>
</article>