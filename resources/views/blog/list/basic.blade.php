<article class="uk-article">

    <h3 class="uk-article-title"><a class="uk-link-reset" href="{{ url('blog/' . $post->published_at->format('Y/m/d/') . $post->slug) }}">{{ $post->title }}</a></h3>

    @if(! is_null($post->project_id))
        <p class="uk-article-meta uk-text-large">{{ $post->project->title }}</p>
    @endif

    <p class="uk-article-meta">{{ $post->published_at->format('F dS, Y') }}</p>

    <p class="uk-text-lead">{{ $post->summary }}</p>

    <div class="uk-grid-small uk-child-width-auto" uk-grid>
        <div>
            <a class="uk-button uk-button-text" href="{{ url('blog/' . $post->published_at->format('Y/m/d/') . $post->slug) }}">Read more</a>
        </div>
    </div>

</article>