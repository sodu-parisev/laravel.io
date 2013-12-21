<article class="article-summary">
    <h2><a class="more" href="{{ $article->showUrl }}">{{ $article->title }}</a></h2>
    <p>{{ $article->summary }}</p>


    <div class="user">
        {{ $article->author->thumbnail }}
        <div class="info">
            <h6><a href="{{ $article->forumThreadUrl }}">{{ $article->author->name }}</a></h6>
            <ul class="meta">
                <li>{{ $article->published_ago }}</li>
            </ul>
        </div>
    </div>
</article>