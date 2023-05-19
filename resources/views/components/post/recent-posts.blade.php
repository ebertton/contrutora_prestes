<div class="recent-posts">
    <div class="col-12">
        <div class="d-flex flex-row">
            <h5>Posts recentes</h5>
            <hr class="ms-2">
        </div>
    </div>
    <div class="row list-post-recentes">


        @foreach($recentPosts as $recentPost)

            <div class="list-post-item list-post-recentes">
                <a href="{{  route('site.post.index', ['post' => $recentPost->id]) }}" class="text-reset">
                    <div class="d-flex flex-row">
                        <img class="img-thumbnail"
                             src="{{$recentPost->url_banner}}">
                        <p class="ps-3"><small>{{$recentPost->titulo}} </small></p>

                    </div>
                </a>
            </div>

        @endforeach


        {{--        <ul class="list-group  list-post-recentes">--}}
        {{--            <li class="list-group-item">--}}
        {{--                <div class="d-flex flex-row">--}}
        {{--                    <img class="img-thumbnail"--}}
        {{--                         src="https://www.pontotel.com.br/wp-content/uploads/2022/05/imagem-corporativa.jpg">--}}
        {{--                    <p class="ps-3"><small> Contrary to popular belief, Lorem Ipsum is not simply </small></p>--}}

        {{--                </div>--}}
        {{--            </li>--}}
        {{--            <li class="list-group-item">--}}
        {{--                <div class="d-flex flex-row">--}}
        {{--                    <img class="img-thumbnail"--}}
        {{--                         src="https://www.pontotel.com.br/wp-content/uploads/2022/05/imagem-corporativa.jpg">--}}
        {{--                    <p class="ps-3"><small> Contrary to popular belief, Lorem Ipsum is not simply </small></p>--}}

        {{--                </div>--}}
        {{--            </li>--}}
        {{--            <li class="list-group-item">--}}
        {{--                <div class="d-flex flex-row">--}}
        {{--                    <img class="img-thumbnail"--}}
        {{--                         src="https://www.pontotel.com.br/wp-content/uploads/2022/05/imagem-corporativa.jpg">--}}
        {{--                    <p class="ps-3"><small> Contrary to popular belief, Lorem Ipsum is not simply </small></p>--}}

        {{--                </div>--}}
        {{--            </li>--}}
        {{--            <li class="list-group-item">--}}
        {{--                <div class="d-flex flex-row">--}}
        {{--                    <img class="img-thumbnail"--}}
        {{--                         src="https://www.pontotel.com.br/wp-content/uploads/2022/05/imagem-corporativa.jpg">--}}
        {{--                    <p class="ps-3"><small> Contrary to popular belief, Lorem Ipsum is not simply </small></p>--}}

        {{--                </div>--}}
        {{--            </li>--}}
        {{--        </ul>--}}
    </div>

</div>
