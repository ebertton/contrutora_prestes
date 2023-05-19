@php $paginaNome = 'Sobre' ; @endphp
    @include('site.components.header')
    <main id="sobre">
        <h1 class="position-absolute color-transparente">Sobre a Construtora Prestes</h1>
        <section id="video" class="position-relative">
            <div class="container-fluid px-0 overflow-hidden">
                <div class="row">
                    <div class="col-12 before">
                        <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="{{$content['about']->about_video}}"
                             ></div>
                      </div>

                </div>

            </div>
            <div id="nextSection"
                class="position-absolute bottom-0 start-0 end-0 text-center d-flex justify-content-center">
                <a href="#sobre-nos" class="d-flex mb-5 flex-column">
                    <img src="../assets/img/icon-nextsection.png" alt="Anterior" srcset="">
                    <img src="../assets/img/icon-nextsection.png" alt="Próximo" srcset="">
                    <img src="../assets/img/icon-nextsection.png" alt="Próximo" srcset="">
                </a>
            </div>
        </section>
        <section id="sobre-nos">
            <div class="container">
                <div class="row py-5 justify-content-center gap-2" id="menu-sobre">
                    <div class="col-auto">
                        <a href="#nossa-historia" class="nav-item color-branco f-20 f-600">Nossa História</a>
                    </div>
                    <div class="col-auto">
                        <a href="#sobre-nos" class="nav-item color-branco f-20 f-600">Quem Somos</a>
                    </div>
                    <div class="col-auto">
                        <a href="#missao-visao" class="nav-item color-branco f-20 f-600">Missão e Visão</a>
                    </div>
                    <div class="col-auto">
                        <a href="#nossas-conquistas" class="nav-item color-branco f-20 f-600">Linha do Tempo</a>
                    </div>
                    <div class="col-auto">
                        <a href="#diferenciais" class="nav-item color-branco f-20 f-600" onclick="openDiferenciaistab()">Diferenciais</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center gap-lg-5 align-items-center py-5">
                    <div class="col-8 col-md-5 col-lg-4">
                        <div class="img-sobre position-relative">
                            <img src=".{{$content['about']->your_home_image}}" alt="imagem sobre - Prestes, seu lar de coração" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-10 col-md-6 col-lg-5">
                        <h2 class="f-40 f-600 mb-4">Prestes, seu <span class="color-verde">lar de coração</span></h2>
                        <p class="f-22">{{ $content['about']->your_home}} </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="missao-visao">
            <div class="container">
                <div class="row py-5 justify-content-center">
                    <div class="col-12 col-md-4 col-lg-3">
                        <h2 class="text-center mb-3 color-verde f-32 f-700">Missão</h2>
                        <p class="text-center f-22">{{ $content['about']->mission}}</p>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3">
                        <h2 class="text-center mb-3 color-verde f-32 f-700">Visão</h2>
                        <p class="text-center f-22">{{ $content['about']->vision}}</p>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3">
                        <h2 class="text-center mb-3 color-verde f-32 f-700">Valores</h2>
                        <p class="text-center f-22">{{ $content['about']->values}}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="nossa-historia">
            <div class="container">
                <dirv class="row py-5">
                    <div class="col-12 col-md-10 mx-auto">
                        <h2 class="f-40 text-center f-400 mb-4">Nossa <span class="color-verde">História</span></h2>
                        <p class="f-22">{!! $content['about']->history !!}</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="nossas-conquistas">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-12">
                        <h2 class="f-40 text-center f-400 mb-4">Acompanhe <span class="color-verde">nossas
                                conquistas</span></h2>
                    </div>
                </div>
            </div>
            <div class="container-right overflow-hidden">
                <div class="row pb-5">
                    <div class="col-12">
                        <div class="conquistas">
                            @foreach ($content['achievements'] as $achievement)
                            <div class="box-conquista px-5">
                                <div class="data-conquista">
                                    <h3 class="f-32 f-700 mb-5 position-relative d-inline-block">{{$achievement->year}}</h3>
                                    <p class="f-20">{{$achievement->achievement}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="imovel-prestes" class="bg-ciano position-relative">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-12">
                        <h2 class="f-40 f-400 text-center">Por que escolher um <span class="color-verde">imóvel
                                Prestes</span>?</h2>
                    </div>
                    <div class="col-12 col-md-12 col-lg-10 mx-auto">
                        <ul class="nav nav-tabs caracteristas-prestes list-unstyled gap-4 gap-xl-3 gap-xxl-4 mb-0 border-0 justify-content-between pt-5 pb-4"
                            id="escolha-prestes" role="tablist">
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <a class="nav-link color-cinza-claro f-40 active" id="diferenciais-tab"--}}
{{--                                    data-bs-toggle="tab" href="#diferenciais" role="tab" aria-controls="diferenciais"--}}
{{--                                    aria-selected="true">Diferenciais</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <a class="nav-link color-cinza-claro f-40" id="produtos-tab" data-bs-toggle="tab"--}}
{{--                                    href="#produtos" role="tab" aria-controls="produtos"--}}
{{--                                    aria-selected="false">Produtos</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <a class="nav-link color-cinza-claro f-40" id="instituto-tab" data-bs-toggle="tab"--}}
{{--                                    href="#instituto" role="tab" aria-controls="instituto"--}}
{{--                                    aria-selected="false">Institudo--}}
{{--                                    Vida</a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content container pb-5" id="escolhaprestesContent">
                <div class="tab-pane fade row show active justify-content-evenly gap-xl-3 gap-lg-3 gap-2"
                    id="diferenciais" role="tabpanel" aria-labelledby="diferenciais-tab">
                    @foreach ($content['differentials'] as $differential)
                        <div class="col-12 col-md-5 col-lg-3 py-3">
                            <img src="{{$differential->icon}}" alt="{{$differential->title}} {{$differential->differential}}" class="mb-3">
                            <h3 class="f-24 f-600"><span class="color-verde mb-3">{{$differential->title}}</span></h3>
                            <p>{{$differential->differential}}</p>
                        </div>
                    @endforeach

                </div>
{{--                <div class="tab-pane fade row justify-content-evenly align-items-center" id="produtos" role="tabpanel"--}}
{{--                    aria-labelledby="produtos-tab">--}}
{{--                    <div class="col-12 col-md-6 col-lg-5" id="map-img">--}}
{{--                        <!-- IMAGEM DEFINIDA NO CSS #map-img -->--}}
{{--                        <img src="../assets/img/img-mapa-parana.png" alt="Mapa" class="img-fluid" >--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-md-6 col-lg-5">--}}
{{--                        <h2 class="f-40 f-700 color-verde">Nossos empreendimentos</h2>--}}
{{--                        <p class="f-16">{{$content['about']->our_enterprises}}</p>--}}
{{--                        <div class="produtos-detalhes">--}}
{{--                            <div class="detalhe my-3">--}}
{{--                                <img src="../assets/img/icon-cidades.png" alt="Imagem {{$content['about']->cities}}" class="mb-2">--}}
{{--                                <h3 class="f-40 f-700 color-verde mb-2">{{$content['about']->cities}}</h3>--}}
{{--                                <p>Cidades</p>--}}
{{--                            </div>--}}
{{--                            <div class="detalhe my-3">--}}
{{--                                <img src="../assets/img/icon-entregues.png" alt="Imagem {{$content['about']->enterprises_delivered}}" class="mb-2">--}}
{{--                                <h3 class="f-40 f-700 color-verde mb-2">{{$content['about']->enterprises_delivered}}</h3>--}}
{{--                                <p>Empreendimentos--}}
{{--                                    Entregues </p>--}}
{{--                            </div>--}}
{{--                            <div class="detalhe my-3">--}}
{{--                                <img src="../assets/img/icon-unidades.png" alt="Imagem {{$content['about']->housing_units}}" class="mb-2">--}}
{{--                                <h3 class="f-40 f-700 color-verde mb-2">{{$content['about']->housing_units}}</h3>--}}
{{--                                <p>Unidades Habitacionais--}}
{{--                                    Entregues.</p>--}}
{{--                            </div>--}}
{{--                            <div class="detalhe my-3">--}}
{{--                                <img src="../assets/img/icon-colaboradores.png" alt="Imagem {{$content['about']->direct_collaborators}}" class="mb-2">--}}
{{--                                <h3 class="f-40 f-700 color-verde mb-2">{{$content['about']->direct_collaborators}}</h3>--}}
{{--                                <p>Colaboradores Diretos</p>--}}
{{--                            </div>--}}
{{--                            <div class="detalhe my-3">--}}
{{--                                <img src="../assets/img/icon-colaboradores-i.png" alt="Imagem {{$content['about']->undirect_collaborators}}" class="mb-2">--}}
{{--                                <h3 class="f-40 f-700 color-verde mb-2">{{$content['about']->undirect_collaborators}}</h3>--}}
{{--                                <p>Colaboradores Indiretos</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade row justify-content-center align-items-center" id="instituto" role="tabpanel"--}}
{{--                    aria-labelledby="instituto-tab">--}}
{{--                    <div class="col-8 col-md-6 col-lg-5 mb-4 mb-lg-0">--}}
{{--                        <img src="../assets/img/logo-vidaPrestes.png" alt="Logotipo {{ $content['about']->life_institute_text }}" class="img-fluid w-75">--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-lg-5">--}}
{{--                        <p>{{ $content['about']->life_institute_text }}</p>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-lg-5 col-md-6 mt-5">--}}
{{--                        <img src="{{ $content['about']->life_institute_image_1 }}" alt="Logotipo {{ $content['about']->life_institute_text }}" class="img-fluid">--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-lg-5 col-md-6 mt-5">--}}
{{--                        <img src="{{ $content['about']->life_institute_image_2 }}" alt="Logotipo {{ $content['about']->life_institute_text }}" class="img-fluid">--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </section>
        <section id="nosso-ceo">
            <div class="container py-5">
                <div class="row py-5">
                    <div class="col-12 col-md-10 col-lg-8 mx-auto text-center">
                        <h2 class="w-auto f-40 f-400 mb-4">Conheça nosso CEO – <span class="f-700 color-verde">{{$content['about']->ceo_name}}</span></h2>
                        <p class="f-20 text-start">{{$content['about']->ceo_history}}</p>

                        <div class="ceo d-flex gap-5 my-5 pt-5 align-items-center flex-column flex-lg-row">
                            <img src="{{$content['about']->ceo_image}}" alt="Imagem {{$content['about']->ceo_quote}}" class="w-100">
                            <div class="depoimento my-5">
                                <p class="text-start">{{$content['about']->ceo_quote}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    @include('site.components.footer')
