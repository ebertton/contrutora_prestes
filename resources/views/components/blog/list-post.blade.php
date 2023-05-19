<div class="col-sm-12 mt-5 d-flex justify-content-center list-post-blog" id="list-post-blog">
    <div class="col-sm-10">

        <div class="row">
            @foreach($posts as $post)

                <div class="list-post-item col-sm-4 p-5">

                    <a href="{{ route('site.post.index', ['post' => $post->id]) }}"  class="text-reset">
                        <img class="img-thumbnail"
                             src="{{ $post->url_banner }}">
                        <div class="tag d-flex justify-content-center col-5 mt-4">
                            <p>{{ $post->tag->descricao ?? "Sem tag" }}</p>
                        </div>

                        <h5> {{  mb_strimwidth(strip_tags($post->titulo), 0, 50, "...") }}</h5>
                    </a>
                    <p>
                       {!!  mb_strimwidth(strip_tags($post->texto), 0, 100, "...") !!}
                    </p>
                </div>

            @endforeach
        </div>
    </div>
</div>
