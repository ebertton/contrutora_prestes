@php $paginaNome = 'Incorporação Imobiliária no Paraná' ; @endphp
@include('site.components.header')

<main id="home">
    <h1 class="position-absolute color-transparente">Construtora Prestes Incorporação Imobiliária no Paraná</h1>
    <section id="banner" class="position-relative">
        <div id="homeSlider" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true"
             data-bs-interval="10000">
            <div class="carousel-inner">
                @php $counterBanner = 0; @endphp
                @foreach($banners as $banner)

                        <div class="carousel-item py-5 @if ($counterBanner == 0) active @endif h-100"
                             style="background-image: url('{{isset($banner->path_banner) ? $banner->path_banner : ''}}');">
                            <a href="{{isset($banner->link) ? $banner->link : '#'}}" class="text-decoration-none text-reset">
                            <div class="container h-100">
                                <div class="row d-flex align-items-center">
                                    <div class="col-12 col-lg-6 col-xl-5">
                                        <h2 class="f-56 f-500 w-100">{{$banner->title}}</h2>
                                        {{--                                    <div class="detalhes mt-5 d-flex flex-column flex-md-row gap-2 gap-md-3 gap-lg-4">--}}
                                        {{--                                        <div class="detalhe d-flex gap-3">--}}
                                        {{--                                            <div class="icon">--}}
                                        {{--                                                <img src="assets/img/icon-dormitorio.png" alt="Dormitório:" srcset="">--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <p class="desc f-20">--}}
                                        {{--                                                    <?php--}}
                                        {{--                                                    $qtdeApto = array_unique(isset($banner->getBanners()[0]) ? $banner->getBanners()[0]->apartments->sortBy('dormitories')->pluck('dormitories')->toArray() : []);--}}
                                        {{--                                                    $var = 1;--}}
                                        {{--                                                    foreach ($qtdeApto as $value) {--}}
                                        {{--                                                        if ($var >= count($qtdeApto) && count($qtdeApto) != 1) {--}}
                                        {{--                                                            echo " e " . $value;--}}
                                        {{--                                                        } else {--}}
                                        {{--                                                            if ($var != 1) {--}}
                                        {{--                                                                echo ', ' . $value;--}}
                                        {{--                                                            } else {--}}
                                        {{--                                                                echo $value;--}}
                                        {{--                                                            }--}}
                                        {{--                                                        }--}}
                                        {{--                                                        $var++;--}}
                                        {{--                                                    }--}}
                                        {{--                                                    ?>--}}
                                        {{--                                                @if(count($qtdeApto))--}}
                                        {{--                                                    Dorm(s)--}}
                                        {{--                                                @endif--}}
                                        {{--                                            </p>--}}
                                        {{--                                        </div>--}}
                                        {{--                                        --}}{{--                                            @if(\App\Models\Apartment::hasSuites($banner->id))--}}
                                        {{--                                        --}}{{--                                            <div class="detalhe d-flex gap-3">--}}
                                        {{--                                        --}}{{--                                                <div class="icon">--}}
                                        {{--                                        --}}{{--                                                    <img src="assets/img/icon-suite.png" alt="Suíte:" srcset="">--}}
                                        {{--                                        --}}{{--                                                </div>--}}
                                        {{--                                        --}}{{--                                                <p class="desc f-20">--}}
                                        {{--                                        --}}{{--                                                    <?php--}}
                                        {{--                                        --}}{{--                                                        $qtdeSuites = array_unique($banner->apartments->sortBy('suites')->pluck('suites')->toArray());--}}
                                        {{--                                        --}}{{--                                                        $var = 1;--}}
                                        {{--                                        --}}{{--                                                        foreach ($qtdeSuites as $value) {--}}
                                        {{--                                        --}}{{--                                                            if ($var >= count($qtdeSuites)  && count($qtdeSuites) != 1) {--}}
                                        {{--                                        --}}{{--                                                                echo " e " . $value;--}}
                                        {{--                                        --}}{{--                                                            } else {--}}
                                        {{--                                        --}}{{--                                                                if ($var != 1) {--}}
                                        {{--                                        --}}{{--                                                                    echo ', ' . $value;--}}
                                        {{--                                        --}}{{--                                                                } else {--}}
                                        {{--                                        --}}{{--                                                                    echo $value;--}}
                                        {{--                                        --}}{{--                                                                }--}}
                                        {{--                                        --}}{{--                                                            }--}}
                                        {{--                                        --}}{{--                                                            $var++;--}}
                                        {{--                                        --}}{{--                                                        }--}}
                                        {{--                                        --}}{{--                                                    ?>--}}
                                        {{--                                        --}}{{--                                                    @if(count($qtdeSuites)) Suíte(s) @endif--}}
                                        {{--                                        --}}{{--                                                </p>--}}
                                        {{--                                        --}}{{--                                            </div>--}}
                                        {{--                                        --}}{{--                                            @endif--}}

                                        {{--                                    </div>--}}
                                        <div class="arrows-slide d-flex flex-row gap-2 mt-5 pt-5">
                                            <button
                                                class="carousel-control-prev position-relative bg-transparent border-0"
                                                type="button" data-bs-target="#homeSlider" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button
                                                class="carousel-control-next position-relative bg-transparent border-0"
                                                type="button" data-bs-target="#homeSlider" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>

                    @php $counterBanner++ @endphp
                @endforeach

                <div id="nextSection"
                     class="position-absolute bottom-0 start-0 end-0 text-center d-flex justify-content-center">
                    <a href="#nossos-imoveis" class="d-flex mb-5 flex-column">
                        <img src="assets/img/icon-nextsection.png" alt="next-section-img" srcset="">
                        <img src="assets/img/icon-nextsection.png" alt="next-section-img" srcset="">
                        <img src="assets/img/icon-nextsection.png" alt="next-section-img" srcset="">
                    </a>
                </div>
    </section>
    <section id="nossos-imoveis" style="overflow-x: hidden;">
        <div class="container">
            <div class="row py-5">
                <div class="col-12">
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <!--<a class="btn border-2 border px-4 input-42 d-flex align-items-center color-branco f-16 hover-verde w-auto justify-content-center"
                                href="empreendimentos/{{$enterprises[0]->city}}" id='see-more' role="button">Buscar Mais</a>-->

                        {{--                            <a class="btn border-2 border px-4 input-42 d-flex align-items-center color-branco f-16 hover-verde w-auto justify-content-center"--}}
                        {{--                                href="{{ env('APP_URL') }}/resultado-busca?_method=GET&_token=3uxuEEOQ8nomEjZXS7rhRXBpFp8HFlfLU5o44FqO&termo=empreendimento" id='see-more' role="button">Buscar Mais</a>--}}
                    </div>
                    <div class="locais mt-4 ">
                        <ul class="nav nav-tabs lista-locais list-unstyled gap-4 gap-xl-3 gap-xxl-4 mb-0 border-0"
                            id="listaLocais" role="tablist">

                            @foreach(array_unique($enterprises->pluck('city')->toArray()) as $key => $city)
                                @if ($key==0)
                                    <script class='d-none'> var cityActive = {{ $city }} </script>
                                @endif
                                <li class="nav-item ms-2" role="presentation">
                                    <a @class(['nav-link color-cinza-claro text-uppercase f-26', 'active'=>$key==0])  style="white-space: nowrap;"
                                       data-bs-toggle="tab"
                                       id="tab-{{$city}}" onclick='alterCity({{$city}}); addActive(this)'
                                       href="#teste-{{$city}}" aria-controls="teste-{{$city}}"
                                       role="tab"
                                       aria-selected="true">{{$enterprises[0]->pegaNome($city)}}</a>
                                </li>
                            @endforeach
                            <script class='d-none'>
                                function alterCity(city) {
                                    $('#see-more').attr('href', 'empreendimentos/' + city)
                                }

                                function addActive(tag) {
                                    $this = tag
                                    $this.parentElement.classList.add('slick-active')


                                }
                            </script>
                        </ul>


                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="container-right">
                <div class="row pb-5">
                    <div class="col-12 pe-0">
                        <div class="tab-content" id="listaLocaisContent">
                            @foreach($enterprises->pluck('city') as $key => $info)
                                <div @class(['tab-pane fade', 'show active' => $key==0]) id="teste-{{$info}}"
                                     role="tabpanel"
                                     aria-labelledby="tab-{{$info}}">
                                    <div class="slide-empreendimentos d-flex gap-5">
                                        @foreach($enterprises->where('city', $info)->sortBy([['created_at', 'desc']]) as $card)
                                            <a href="{{route('enterprise.unico', ['id' => $card->slug_name])}}"
                                               class="text-decoration-none text-white">
                                                <div class="single-empreendimento me-4">
                                                    <div class="img-empreendimento">
                                                        <img
                                                            src="{{(empty($card->images[0]->image) ? asset('/assets/img/empreendimento-template.png') : asset($card->images[0]->image))}}"
                                                            alt="Imagem empreendimento {{$card->name}}" srcset="">
                                                    </div>
                                                    <div class="desc-empreendimento py-4 px-5">
                                                        {{--                                                <div class="botao-whatsapp w-100">--}}
                                                        {{--                                                    <a href="{{$contato->whatsapp}}" target="_blank"--}}
                                                        {{--                                                       class="f-40 d-flex align-items-center justify-content-center"><i--}}
                                                        {{--                                                            class="fa-brands fa-whatsapp"></i></a>--}}
                                                        {{--                                                </div>--}}
                                                        <div class="infos-empreendimento">
                                                            <p
                                                                class="status-empreendimento f-14 color-cinza-claro
                                                        text-uppercase mb-0">
                                                                @if(\App\Models\Status::getPercentage($card->id, "5") == "100")
                                                                    Pronto para morar
                                                                @else
                                                                    Em Obras
                                                                @endif
                                                            </p>
                                                            <p class="nome-empreendimento f-600 f-24 mb-0">{{$card->name}}</p>
                                                            <p class="local-empreendimento f-16 color-verde">
                                                                Bairro {{$card->neighborhood}},
                                                                {{$card->cities->city_name}}</p>
                                                        </div>
                                                        <div class="detalhes-empreendimento d-grid pt-3">
                                                            @if ($card->apartments->pluck('square_meters')->count() > 0)
                                                                <div class="d-flex flex-row align-items-center gap-4">
                                                                    <img
                                                                        src="assets/img/icon-tamanho.png" alt="Tamanho:"
                                                                        srcset="">
                                                                    <p class="mb-0 f-14">
                                                                            <?php
                                                                            $qtdeMetros = $card->apartments->sortBy('square_meters')->pluck('square_meters')->toArray();
                                                                            if (count($qtdeMetros) != 1) {
                                                                                echo min($qtdeMetros) . 'm² a ' . max($qtdeMetros) . 'm²';
                                                                            } else {
                                                                                echo $qtdeMetros[0] . 'm²';
                                                                            }
                                                                            ?>
                                                                    </p>
                                                                </div>
                                                            @endif
                                                            @if (!empty($card->parking_spaces))
                                                                <div class="d-flex flex-row align-items-center gap-4">
                                                                    <img
                                                                        src="assets/img/icon-vagas.png" alt="Vagas:"
                                                                        srcset="">
                                                                    <p class="mb-0 f-14">{{$card->parking_spaces}}
                                                                        vaga(s)</p>
                                                                </div>
                                                            @endif
                                                            @if ($card->apartments->pluck('dormitories')->count() > 0)
                                                                <div class="d-flex flex-row align-items-center gap-4">
                                                                    <img
                                                                        src="assets/img/icon-dormitorios.png"
                                                                        alt="Dormitórios:" srcset="">
                                                                    <p class="mb-0 f-14">
                                                                            <?php
                                                                            $qtdeApto = array_unique($card->apartments->sortBy('dormitories')->pluck('dormitories')->toArray());
                                                                            $var = 1;
                                                                            foreach (array_unique($qtdeApto) as $value) {
                                                                                if ($var >= count($qtdeApto) && count($qtdeApto) != 1) {
                                                                                    echo " e " . $value;
                                                                                } else {
                                                                                    if ($var != 1) {
                                                                                        echo ', ' . $value;
                                                                                    } else {
                                                                                        echo $value;
                                                                                    }
                                                                                }
                                                                                $var++;
                                                                            }
                                                                            ?>
                                                                        @if(count($qtdeApto))
                                                                            Dormitórios
                                                                        @endif
                                                                    </p>
                                                                </div>
                                                            @endif
                                                            @if ($card->apartments->pluck('suites')->sum() > 0)
                                                                <div class="d-flex flex-row align-items-center gap-4">
                                                                    <img
                                                                        src="assets/img/icon-suites.png" alt="Suites:"
                                                                        srcset="">
                                                                    <p class="mb-0 f-14">
                                                                            <?php
                                                                            $qtdeSuites = array_unique($card->apartments->sortBy('suites')->pluck('suites')->toArray());
                                                                            $var = 1;
                                                                            foreach ($qtdeSuites as $value) {
                                                                                if ($var >= count($qtdeSuites) && count($qtdeSuites) != 1) {
                                                                                    echo " e " . $value;
                                                                                } else {
                                                                                    if ($var != 1) {
                                                                                        echo ', ' . $value;
                                                                                    } else {
                                                                                        echo $value;
                                                                                    }
                                                                                }
                                                                                $var++;
                                                                            }
                                                                            ?>
                                                                        @if(count($qtdeSuites))
                                                                            Suites
                                                                        @endif
                                                                    </p>
                                                                </div>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="link-empreendimento">
                                                        <a class=" mb-5 py-2 btn border-2 border px-4 input-42 d-flex align-items-center f-600 color-grafite f-20 w-auto justify-content-center bg-branco"
                                                           href="{{route('enterprise.unico', ['id' => $card->slug_name])}}"
                                                           role="button"> ver mais </a>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="prazer">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 col-md-10 col-lg-8 mx-auto text-center">
                    <h2 class="w-auto underline-style f-51 f-400">Prestes, seu lar de coração.</h2>
                    <p class="f-20">{{$content->we_are_prestes}}</p>
                    <a class="btn border-2 border bg-branco px-4 w-auto input-42 color-preto f-16 f-700 rounded hover-verde"
                       href="{{ route('about') }}" role="button">Saiba mais</a>
                </div>
            </div>
        </div>
    </section>
    <section id="video">
        <div class="container-fluid px-0 overflow-hidden">
            <div class="row">
                <div class="col-12 before">
                    <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="{{$content->home_video}}"
                    ></div>
                </div>

            </div>

        </div>
    </section>
    <section id="carousel-blog" class="d-flex align-items-center">
        @component('components.home.section-blog', ['posts' => $posts])
        @endcomponent
    </section>
    @include('site.components.referral')

</main>
@include('site.components.footer')

