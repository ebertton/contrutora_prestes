<div class="container pt-5 pb-5">
    <div class="d-flex flex-row justify-content-between">
        <div>
            <h2 class="f-51">Blog da Prestes</h2>
        </div>
        <div class="read-more-blog">

            <a class="text-reset d-flex flex-row" href="{{ route('site.blog.index') }}">
                <p class="f-26">Ler mais artigos </p>
                <div class="chevron-right pt-2">
                    <span>
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>

                </div>
            </a>


        </div>
    </div>
    <div id="carouselExampleControls" class="carousel carousel-blog d-flex justify-content-center"
         data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($posts as $post)
                <div class="carousel-item p-3 {{ $post->id === $posts[0]->id ? 'active' : '' }} ">
                    <div class="card" style="min-width: 575px;">
                        <div class="row g-0">
                            <div class="col-lg-5">
                                <a href="{{ route('site.post.index', ['post' => $post->id]) }}" target="_blank" class="text-reset">
                                    <img
                                        src="{{ $post->url_banner }}"
                                        class="d-block w-100 img-fluid rounded-start cropped1" alt="">
                                </a>
                            </div>
                            <div class="col-lg-7 ps-1">
                                <div class="card-body">
                                    <a href="{{ route('site.post.index', ['post' => $post->id]) }}" target="_blank" class="text-reset">
                                        <div class="tag d-flex justify-content-center col-7 mb-3 mt-1" style="max-width: 200px">
                                            <p class="f-18">{{ $post->tag->descricao ?? "Sem tag" }}</p>
                                        </div>
                                        <h3 class="card-title" >{{   mb_strimwidth(strip_tags($post->titulo ), 0, 50, "...")}} </h3>
                                        <div class="card-text text-secondary text-white f-22" >
                                            {!!  mb_strimwidth(strip_tags($post->texto), 0, 100, "...") !!}
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
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
