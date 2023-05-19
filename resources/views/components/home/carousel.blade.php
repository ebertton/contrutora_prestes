<div class="container pt-5 pb-5">
    <div class="d-flex flex-row justify-content-between">
        <div>
            <h2>Blog da Prestes</h2>
        </div>
        <div class="read-more-blog">

                <a class="text-reset d-flex flex-row" href="{{ route('site.blog.index') }}">
                    <p class="">Ler mais artigos </p>
                    <div class="chevron-right">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </a>


        </div>
    </div>

    <div id="carouselExampleControls" class="carousel carousel-blog mt-5" data-bs-ride="carousel">
        <div class="carousel-inner">

            @foreach($posts as $post)

                <div class="carousel-item d-flex flex-row ">
                    <div class="img-wrapper col-5">
                        <a href="{{ route('site.post.index', ['post' => $post->id]) }}" class="text-reset">
                            <img class="img-thumbnail"
                                 src="{{ $post->url_banner }}">
                        </a>
                    </div>
                    <div class="col-7 ps-3 pe-3">
                        <a href="{{ route('site.post.index', ['post' => $post->id]) }}" class="text-reset">
                            <div class="tag d-flex justify-content-center col-7 mb-3">
                                <p>{{ $post->tag->descricao ?? "Sem tag" }}</p>
                            </div>
                            <h5>{{ $post->titulo }}</h5>
                            <p>
                                {!!  mb_strimwidth(strip_tags($post->texto), 0, 80, "...") !!}
                            </p>
                        </a>
                    </div>
                </div>

            @endforeach


        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


