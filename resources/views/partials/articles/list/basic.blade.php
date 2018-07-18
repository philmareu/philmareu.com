<article class="uk-article">

    <h1 class="uk-article-title"><a class="uk-link-reset" href="{{ url('blog/' . $post->published_at->format('Y/m/d/') . $post->slug) }}">{{ $post->title }}</a></h1>

    <p class="uk-article-meta">{{ $post->published_at->format('F dS, Y') }}</p>

    <p class="uk-text-lead">{{ $post->summary }}</p>

    <div class="uk-grid-small uk-child-width-auto" uk-grid>
        <div>
            <a class="uk-button uk-button-text" href="{{ url('blog/' . $post->published_at->format('Y/m/d/') . $post->slug) }}">Read more</a>
        </div>
    </div>

</article>