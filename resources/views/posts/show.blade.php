@extends('layouts.default')

@section('title')
    {{ $post->title }}
@endsection

@section('header-text')
    <figure class="uk-overlay">
        <img src="{{ asset('img/header-blog.jpg') }}" alt="Blog header image" class="uk-hidden-small">
        <figcaption class="uk-overlay-panel uk-flex uk-flex-middle">
            <div class="uk-container uk-container-center">
                <h1>{{ $post->title }}</h1>
            </div>
        </figcaption>
    </figure>
@endsection

@section('content')

    <div class="uk-block uk-block-muted">
        <div class="uk-container uk-width-medium-1-2 uk-container-center">
            <div class="meta uk-text-muted">Posted on {{ $post->posted_at->format('M jS, Y') }}</div>

            <div id="post">{!! $post->body !!}</div>

            <div id="disqus_thread"></div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>

        var post = $('#post');
        var html = post.html();

        // Let marked do its normal token generation.
        tokens = marked.lexer( html );

        // Mark all code blocks as already being escaped.
        // This prevents the parser from encoding anything inside code blocks
        tokens.forEach(function( token ) {
            if ( token.type === "code" ) {
                token.escaped = true;
            }
        });

        // Let marked do its normal parsing, but without encoding the code blocks
        parsed = marked.parser( tokens );

        post.html(parsed);

        var url = '{{ url('blog/' . $post->posted_at->format('Y/m/d') . '/' . $post->slug) }}';
        var id = 'post-' + '{{ $post->id }}';
        var title = '{{ $post->title }}';

        /**
         * RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         * LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
         */

        var disqus_config = function () {
            this.page.url = url; // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = id; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            this.page.title = title;
        };

        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');

            s.src = '//philmareu.disqus.com/embed.js';

            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

@endsection