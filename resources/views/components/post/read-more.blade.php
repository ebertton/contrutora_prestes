<div>
    <hr>
    <h5>Leia mais sobre o assunto:</h5>
    <div class="col-sm-12">
        <div class="row">
            @foreach($similarPosts as $similarPost)

                <div class="list-post-item col-sm-4">

                    <a href="{{ route('site.post.index', ['post' => $similarPost->id]) }}"  class="text-reset">
                        <img class="img-thumbnail"
                             src="{{ $similarPost->url_banner }}">
                        <p class="mt-4"><strong>{{ $similarPost->titulo }}</strong></p>
                    </a>

                </div>

            @endforeach
        </div>
    </div>
</div>


