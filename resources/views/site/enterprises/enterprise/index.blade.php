@php $paginaNome = 'Empreendimento '. $dataEnterprise->name ; @endphp
@include('site.components.header')

<style>
    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
        color: #fff;
        background-color: rgba(0, 0, 0, 0);
        border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
        border-bottom: solid 3px var(--verde);;
    }

    .nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover {
        border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
        border-bottom: solid 3px var(--verde);;
        color: unset;

    }

    .nav-link {
        color: var(--cinza-claro);
    }

    .nav-tabs {
        border-bottom: 0;
    }

</style>

<main id="empreendimento">
    <h1 class="position-absolute color-transparente">Empreendimento {{$dataEnterprise->name}}</h1>
    <section id="video" class="position-relative">
        <div class="container-fluid px-0 overflow-hidden">
            <div class="row">
                <div class="col-12 before position-relative" style="--titulo: '{{$dataEnterprise->name}}';">
                    <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="{{$dataEnterprise->video}}"
                         class="img-fluid w-100 video position-relative">
                    </div>
                </div>
            </div>

        </div>
        <div id="nextSection"
             class="position-absolute bottom-0 start-0 end-0 text-center d-flex justify-content-center">
            <a href="#sobre-nos" class="d-flex mb-5 flex-column">
                <img src="../../assets/img/icon-nextsection.png" alt="Icone Próxima" srcset="">
                <img src="../../assets/img/icon-nextsection.png" alt="Icone Próxima" srcset="">
                <img src="../../assets/img/icon-nextsection.png" alt="Icone Próxima" srcset="">
            </a>
        </div>
    </section>
    <section id="emprendimento-single">
        <div class="container">
            <div class="row py-5 justify-content-lg-between justify-content-center gap-2" id="menu-empreendimento">
                <div class="col-auto">
                    <a href="#informacoes" class="nav-item color-branco f-20 f-600">Informações</a>
                </div>
                <div class="col-auto">
                    <a href="#imagens" class="nav-item color-branco f-20 f-600">Imagens</a>
                </div>
                <div class="col-auto">
                    <a href="#plantas" class="nav-item color-branco f-20 f-600">Plantas</a>
                </div>
                <div class="col-auto">
                    <a href="#localizacao" class="nav-item color-branco f-20 f-600">Localização</a>
                </div>
                <div class="col-auto">
                    <a href="#status" class="nav-item color-branco f-20 f-600">Status da Obra</a>
                </div>
                <div class="col-auto">
                    <a href="#vendas" class="nav-item color-branco f-20 f-600">Central</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row py-5 justify-content-lg-between">
                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <h2 class="f-30 f-700 color-verde">{{$dataEnterprise->describe_title}}</h2>
                    <p>{{$dataEnterprise->describe}}</p>
                    <div class="informacoes">
                        <div class="infos-empreendimento">
                            <p class="status-empreendimento f-14 color-cinza-claro text-uppercase mb-0">
                                @if(\App\Models\Status::getPercentage($dataEnterprise->id, "5") == "100")
                                    Pronto para morar
                                @else
                                    Em Obras
                            @endif
                            <p class="nome-empreendimento f-600 f-32 mb-0">{{$dataEnterprise->name}}</p>
                            <p class="local-empreendimento f-16 color-verde"> {{'Bairro ' . $dataEnterprise->neighborhood .  ', ' . $dataEnterprise->cities->city_name }} </p>
                        </div>
                        <div class="detalhes-empreendimento d-grid pt-3 mb-3 mb-lg-0">
                            @if ($dataEnterprise->apartments->sortBy('dormitories')->pluck('dormitories')->count() > 0)
                                <div class="d-flex flex-row align-items-center gap-4"><img
                                        src="../../assets/img/icon-dormitorios.png" alt="Dormitórios: " srcset="">
                                    <p class="mb-0 f-16">
                                            <?php
                                            $qtdeApto = array_unique($dataEnterprise->apartments->sortBy('dormitories')->pluck('dormitories')->toArray());

                                            $var = 1;
                                            foreach ($qtdeApto as $value) {
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
                                        Dormitório(s)
                                    </p>
                                </div>
                            @endif

                            <div class="d-flex flex-row align-items-center gap-4"><img
                                    src="../../assets/img/icon-vagas.png" alt="Vagas de garagem" srcset="">
                                <p class="mb-0 f-16">{{$dataEnterprise->parking_spaces}} vaga(s) de garagem </p>
                            </div>
                            @if ($dataEnterprise->apartments->pluck('square_meters')->count() > 0)
                                <div class="d-flex flex-row align-items-center gap-4"><img
                                        src="../../assets/img/icon-tamanho.png" alt="Tamanho: " srcset="">
                                    <p class="mb-0 f-16">
                                            <?php
                                            $qtdeMetros = $dataEnterprise->apartments->sortBy('square_meters')->pluck('square_meters')->toArray();
                                            if (count($qtdeMetros) != 1) {
                                                echo min($qtdeMetros) . 'm² a ' . max($qtdeMetros) . 'm²';
                                            } else {
                                                echo $qtdeMetros[0] . 'm²';
                                            }
                                            $var++;

                                            ?></p>
                                </div>
                            @endif




                            @if($dataEnterprise->concierge24h)
                                <div class="d-flex flex-row align-items-center gap-4"><img
                                        src="../../assets/img/icon-portaria.png" alt="Portaria" srcset="">
                                    <p class="mb-0 f-16">Portaria 24 horas</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <script>
                    function validarPost() {
                        if (grecaptcha.getResponse() != "") return true;

                        return false;
                    }
                </script>
                <div class="col-12 col-md-6 col-lg-6">
                    <form action="/join-contact" onsubmit="return validarPost()" id="form-post" method='post'
                          class="d-flex flex-column gap-3 align-items-start">
                        @csrf
                        <input type="hidden" name="midia" value="">
                        <input type="hidden" name="conversao" value="">
                        <input type="hidden" id="cv" name="empreendimentoContato" value="{{ $dataEnterprise->name }}">
                        <input type="hidden" name="cidadeNomeContato" value="{{ $dataEnterprise->cities->city_name }}">
                        <div class="mb-3 w-100">
                            <label for="" class="form-label f-14">Nome Completo</label>
                            <input required type="text" class="form-control bg-dark border-0 shadow-none input-50 "
                                   name="nome"
                                   id="" aria-describedby="helpId" placeholder="" required>
                        </div>
                        <div class="group-form d-md-flex flex-row justify-content-between w-100 gap-3">

                            <div class="mb-3 w-100">
                                <label for="" class="form-label f-14">Telefone para contato</label>
                                <input required type="phone" class="form-control bg-dark border-0 shadow-none input-50 "
                                       name="telefone" id="" aria-describedby="helpId" placeholder="" required>
                            </div>
                            <div class="mb-3 w-100">
                                <label for="" class="form-label f-14">E-mail</label>
                                <input required type="email" class="form-control bg-dark border-0 shadow-none input-50 "
                                       name="email" id="" aria-describedby="helpId" placeholder="" required>
                            </div>
                        </div>
                        <div class="mb-3 w-100">
                            <label for="" class="form-label f-14">Deixe aqui sua mensagem ou sua dúvida.</label>
                            <textarea class="form-control bg-dark border-0 shadow-none  " name="message" id="" rows="5"
                                      required></textarea>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LdHjeIhAAAAABzGNn-bA7XlEOXm94z0HUEY7-YA"></div>
                        <input required type="submit"
                               class="btn border-2 rounded-3 border-verde bg-verde px-5 input-42 d-flex align-items-center color-ciano f-16 hover-ciano"
                               href="#" role="button" value="Enviar">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="informacoes" class="bg-ciano">
        <div class="container-fluid px-0 overflow-hidden">
            <div class="row">
                @if (!empty($dataEnterprise->benefit->count()))
                    <div class="col-12 col-md-6 col-lg-5 position-relative dragmeParent" id="scroll">
                        <img src="{{asset($dataEnterprise->benefits_image)}}" alt="Imagem das vantagens" class="blue">
                    </div>

                    <div class="col-12 col-md-6 col-lg-7 bg-ciano align-items-center d-grid">
                        <div class="topicos">
                            <ul class="d-grid flex-column gap-4 mb-0 py-5">

                                @foreach($dataEnterprise->benefit as $key => $beneficios)
                                    <li class="nav-item color-branco f-20 f-600 col">
                                        <span>{{$key + 1}}</span>{{$beneficios->text}}</li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                @else
                    <img src="{{asset($dataEnterprise->benefits_image)}}" width='100%' alt="Imagem das vantagens">
                @endif
            </div>
        </div>
    </section>
    <nav class="mt-5">
        <div class="nav nav-tabs d-flex justify-content-center" id="nav-tab" role="tablist">
            <button class="nav-link active f-20" id="nav-planta-tab" data-bs-toggle="tab" data-bs-target="#nav-planta"
                    type="button" role="tab" aria-controls="nav-planta" aria-selected="true">Plantas
            </button>
            @if(isset($dataEnterprise->tour_360_link))
                <button class="nav-link f-20" id="nav-360-tab" data-bs-toggle="tab" data-bs-target="#nav-360"
                        type="button"
                        role="tab" aria-controls="nav-360" aria-selected="false">Tour 360
                </button>
            @endif

        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-planta" role="tabpanel" aria-labelledby="nav-planta-tab">
            <section id="plantas">
                <div class="container">
                    <div class="row py-5 justify-content-between">
                        <div class="col-12 col-lg-3 col-xl-2 d-flex align-items-center justify-content-center">
                            <ul class="nav nav-tabs list-unstyled border-0 flex-column flex-md-row d-flex gap-lg-5 gap-3 mb-3 mb-md-0 justify-content-center align-items-center"
                                id="tabPlantas" role="tablist">
                                @foreach($dataEnterprise->apartments->sortBy('dormitories') as $key=>$apartment)
                                    <li class="nav-item col text-center" role="presentation">
                                        <a @class(['nav-link color-branco f-24 text-nowrap', 'active'=>$key==0]) id="dormitorio-{{$apartment->id}}-tab"
                                           data-bs-toggle="tab" href="#dormitorio-{{$apartment->id}}" role="tab"
                                           aria-controls="dormitorio-{{$apartment->id}}"
                                           aria-selected="true">
                                            {{$apartment->dormitories}} {{$apartment->dormitories <= 1 ? "Dormitório" : "Dormitórios"}}
                                            @if($apartment->suites > 0)
                                                <br>
                                                {{$apartment->suites <= 1 ? " com suíte " : $apartment->suites." suítes "}}
                                            @endif
                                            @if($apartment->garden == "1")
                                                garden
                                            @endif
                                        </a>
                                    </li>
                                @endforeach
                                @if (!empty($dataEnterprise->lands))
                                    @foreach($dataEnterprise->lands->sortBy('dormitories') as $key=>$land)
                                        <li class="nav-item col text-center" role="presentation">
                                            <a @class(['nav-link color-branco f-24 text-nowrap']) id="land-{{$land->id}}-tab"
                                               data-bs-toggle="tab" href="#land-{{$land->id}}" role="tab"
                                               aria-controls="land-{{$land->id}}"
                                               aria-selected="true"> Terreno {{$land->square_meters}}m²</a>
                                        </li>
                                    @endforeach
                                @endif
                                <li class="d-none nav-item col text-center" role="presentation">
                                    <a class="nav-link color-branco f-24 text-nowrap" id="dormitorio-2-tab"
                                       data-bs-toggle="tab"
                                       href="#dormitorio-2" role="tab" aria-controls="dormitorio-2"
                                       aria-selected="true">2
                                        dormitórios</a>
                                </li>
                                <li class="d-none nav-item col text-center" role="presentation">
                                    <a class="nav-link color-branco f-24 text-nowrap" id="dormitorio-3-tab"
                                       data-bs-toggle="tab"
                                       href="#dormitorio-3" role="tab" aria-controls="dormitorio-3"
                                       aria-selected="true">3
                                        dormitórios</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-12 col-lg-7 col-xl-8">
                            <div class="tab-content" id="tabPlantasContent">

                                @foreach($dataEnterprise->apartments as $key=>$floor)
                                    <div @class(['tab-pane fade','show active'=>$key==0]) id="dormitorio-{{$floor->id}}"
                                         role="tabpanel"
                                         aria-labelledby="dormitorio-{{$floor->id}}-tab">
                                        <img src="{{asset($floor->floor_plan)}}" alt="Imagem da planta"
                                             class="img-fluid">
                                    </div>
                                @endforeach
                                @if (!empty($dataEnterprise->lands))
                                    @foreach($dataEnterprise->lands as $key=>$land)
                                        <div @class(['tab-pane fade']) id="land-{{$land->id}}"
                                             role="tabpanel"
                                             aria-labelledby="land-{{$land->id}}-tab">
                                            <img src="{{asset($land->floor_plan)}}" alt="Imagem da planta"
                                                 class="img-fluid">
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="nav-360" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="container">
                <div class="row py-5 justify-content-between">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        @if(isset($dataEnterprise->tour_360_link))
                            <iframe
                                src="{{ $dataEnterprise->tour_360_link }}"
                                title="description"
                                style="height: 600px; width: 100%; border-radius: 20px; border: solid 1px #6c757d;">
                            </iframe>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (!empty($status))
        <section id="status">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-12">
                        <div class="col-12">
                            <h2 class="title background f-24 f-600"><span>Status da Obra</span></h2>
                        </div>
                        <div class="progresso mt-5 d-none">
                            <div class="progress bg-grafite">
                                <div class="progress-bar" id='progress-bar' role="progressbar"
                                     data-content='{{$status['actualStatus']['status_progress']}}' aria-valuenow="40"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-5 justify-content-between align-items-center">
                        <div class="col-12 col-md-5 col-lg-3">
                            <div
                                class="etapas-projeto position-relative d-flex flex-row justify-content-between align-items-stretch">
                                <div class="etapas d-flex flex-column justify-content-between gap-5 position-relative">

                                    @foreach ($status['allStatus'] as $stts)

                                        @if(!empty($stts['name']))
                                            <div
                                                @class(['etapa d-flex gap-4 align-items-center' , 'concluido' => ($stts['identifier'] <= $status['actualStatus']['status'])   ])
                                                @if (!empty($stts['image'])) onclick='changeImage({{$stts["image"]}})'
                                                style='cursor: pointer;' @endif>
                                                <div class="bullet"></div>
                                                <p class="mb-0">{{$stts['name']}} - {{$stts['status_progress']}}%</p>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-12 col-md-7 col-lg-7 d-flex align-items-center my-4 justify-content-center justify-content-lg-between">
                            <img src="{{asset($status['actualStatus']['status_image'])}}" id='img-status'
                                 alt="Imagem de Status" class="img-fluid rounded-3">
                        </div>
                    </div>


                </div>
        </section>
    @endif
    <section id="imagens">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <h2 class="title background f-24 f-600">
                            <span>
                                Fotos dos
                                @if (!empty($dataEnterprise->apartments->count()))
                                    apartamentos
                                @endif
                                @if (!empty($dataEnterprise->apartments->count()) && !empty($dataEnterprise->lands->count()))
                                    e
                                @endif
                                @if (!empty($dataEnterprise->lands->count()))
                                    terrenos
                                @endif
                            </span>
                        </h2>
                    </div>
                    {{--                    <h2 class="text-center f-24 f-600 pb-5">Fotos dos--}}
                    {{--                        @if (!empty($dataEnterprise->apartments->count()))--}}
                    {{--                            apartamentos--}}
                    {{--                        @endif--}}
                    {{--                        @if (!empty($dataEnterprise->apartments->count()) && !empty($dataEnterprise->lands->count()))--}}
                    {{--                            e--}}
                    {{--                        @endif--}}
                    {{--                        @if (!empty($dataEnterprise->lands->count()))--}}
                    {{--                            terrenos--}}
                    {{--                        @endif--}}
                    {{--                    </h2>--}}

                    {{--                    <hr>--}}
                </div>
            </div>
            <div class="row py-4">
                @foreach($dataEnterprise->images->where('type', 0) as $image)
                    <a href="{{asset($image->image)}}" data-toggle="lightbox" data-gallery="example-gallery"
                       class="col-6 col-md-6 col-lg-4 mb-3">
                        <img src="{{asset($image->image)}}" alt="Imagem do apartamento" class="img-fluid rounded-3">
                    </a>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" id="carregar-mais" class="color-verde f-18 text-center">Ver mais imagens</a>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title background f-24 f-600"><span>Áreas comuns para você viver bem</span></h2>
                </div>
            </div>
            <div class="row py-4">

                @php $count = 1; @endphp
                @foreach($dataEnterprise->images->where('type', 1) as $image)
                    <a href="{{asset($image->image)}}" data-toggle="lightbox" data-gallery="common-gallery"
                       class="col-6 col-md-6 col-lg-4 mb-3">
                        <img src="{{asset($image->image)}}" alt="Imagem de área comum" class="img-fluid rounded-3">
                    </a>
                    @php $count++; @endphp
                @endforeach

            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" id="common-carregar-mais" class="color-verde f-18 text-center">Ver mais imagens</a>
                </div>
            </div>
        </div>


        {{--        <div class="container">--}}
        {{--            <div class="row py-5">--}}
        {{--                <div class="col-12">--}}
        {{--                    <h2 class="text-center f-24 f-600 pb-5">Áreas comuns para você viver bem</h2>--}}
        {{--                </div>--}}
        {{--                <div class="col-12">--}}
        {{--                    <div id="carouselAreaComum" class="carousel slide d-flex" data-bs-ride="carousel">--}}
        {{--                        <button class="carousel-control-prev position-relative" type="button"--}}
        {{--                                data-bs-target="#carouselAreaComum" data-bs-slide="prev">--}}
        {{--                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
        {{--                            <span class="visually-hidden">Previous</span>--}}
        {{--                        </button>--}}
        {{--                        <div class="carousel-inner w-100">--}}
        {{--                            @php $count = 1; @endphp--}}
        {{--                            @foreach($dataEnterprise->images->where('type', 1) as $key => $image)--}}

        {{--                                <div @class(['carousel-item', 'active'=>$count==1]) >--}}
        {{--                                    <img src="{{$image->image}}" alt="Imagem de área comum"--}}
        {{--                                         class="d-block img-fluid rounded-3">--}}
        {{--                                </div>--}}
        {{--                                @php $count++; @endphp--}}
        {{--                            @endforeach--}}

        {{--                        </div>--}}
        {{--                        <button class="carousel-control-next position-relative" type="button"--}}
        {{--                                data-bs-target="#carouselAreaComum" data-bs-slide="next">--}}
        {{--                            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
        {{--                            <span class="visually-hidden">Next</span>--}}
        {{--                        </button>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}

    </section>
    <section id="localizacao">
        <div class="container pb-5">
            <div class="col-12">
                <h2 class="title background f-24 f-600" style="text-align: left"><span>Localização</span></h2>
            </div>
            <div class="row justify-content-center py-5">
                <div class="col-12 col-lg-4 d-flex justify-content-center gap-3 flex-column">
                    <h2 class="f-24 f-600">Localização privilegiada</h2>
                    <p class="f-20">{{ $dataEnterprise->prime_location_text }}</p>
                    <div class="endereco d-flex flex-row gap-4 align-items-center mb-4"><img
                            src="../../assets/img/Location.png" alt="Local" class="img-fluid">
                        <p class="f-20 color-branco mb-0">
                            {{
                                $dataEnterprise->street . ', ' .
                                $dataEnterprise->number . ' - ' .
                                $dataEnterprise->neighborhood .', ' .
                                $dataEnterprise->cities->city_name . ' - ' .
                                $dataEnterprise->state.' - '.
                                $dataEnterprise->zip_code
                            }}
                        </p>
                    </div>


                </div>
                <div class="col-12 col-lg-6">

                    <iframe
                        src="https://maps.google.com/maps?q={{urlencode($dataEnterprise->street . ' ' . $dataEnterprise->number . ', ' . $dataEnterprise->zip_code . ', ' . $dataEnterprise->cities->city_name . ' - ' . $dataEnterprise->state)}}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        height="450" width='100%' style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
    </section>
    <section id="vendas" class="bg-ciano position-relative d-flex align-items-center">
        <div class="container">
            <div class="row py-5 justify-content-between align-items-center">
                <div class="col-12 col-lg-4">
                    <h2 class="f-32 f-600 py-5 px-lg-5">
                        Quer visitar?
                        Fale com nossa
                        Central de Vendas
                    </h2>
                </div>

                @php $saleCenter = (empty($dataEnterprise->salesCenter)) ? $dataEnterprise->getSalesCenter() : $dataEnterprise->salesCenter ; @endphp


                <div
                    class="col-12 col-lg-6 d-flex justify-content-center flex-column justify-content-lg-start d-lg-block">
                    <h3 class="f-32 f-600 pb-5">Central de Vendas {{$saleCenter->cities->city_name}}</h3>
                    <div class="local">
                        <a class="endereco d-flex flex-row gap-4 align-items-center mb-4 color-branco" target="_blank"
                           href="https://www.google.com/maps/search/{{$saleCenter->street . ', ' . $saleCenter->number}}"><img
                                src="../../assets/img/localizacao.png" alt="Endereço: " class="img-fluid">
                            <p class="f-22 color-branco mb-0">{{$saleCenter->street . ', ' . $saleCenter->number}}</p>
                        </a>
                        <a class="email d-flex flex-row gap-4 align-items-center mb-4 color-branco" target="_blank"
                           href="mailto:{{$saleCenter->mail}}"><img src="../../assets/img/email.png" alt="E-mail: "
                                                                    class="img-fluid">
                            <p class="f-22 color-branco mb-0">{{$saleCenter->mail}}</p>
                        </a>
                        <a class="contato d-flex flex-row gap-4 align-items-center mb-4 color-branco" target="_blank"
                           href="tel:{{$saleCenter->phone}}"><img src="../../assets/img/whatsapp.png" alt="Whatsapp: "
                                                                  class="img-fluid">
                            <p class="f-22 color-branco mb-0">{{$saleCenter->phone}}</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('site.components.referral')
    <section id="form">
        <div class="container py-5">
            <div class="row py-5 justify-content-lg-between">
                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <h2 class="f-54 f-400 color-verde" id='title_contact'></h2>
                    <p id='text_contact'></p>
                    <div class="contatos d-flex flex-column gap-4 pt-5">
                        <div class="phone d-flex flex-row align-items-center gap-3">
                            <img src="/assets/img/icon-telephone.png" alt="" srcset="">
                            <p id='phone' class="f-16 mb-0"></p>
                        </div>
                        <div class="email d-flex flex-row align-items-center gap-3">
                            <img src="/assets/img/icon-email.png" alt="" srcset="">
                            <p class="f-16 mb-0" id='email'></p>
                        </div>
                    </div>
                    <div class="sociais d-flex gap-5 align-items-center pt-5">
                        <a href="#" id='facebook' target="_blank" rel="noopener noreferrer"
                           class="f-24 color-cinza-claro">
                            <i class="fa-brands fa-facebook-f f-20"></i>
                        </a>
                        <a href="#" id='instagram' target="_blank" rel="noopener noreferrer"
                           class="f-24 color-cinza-claro">
                            <i class="fa-brands fa-instagram f-24"></i>
                        </a>
                        <a href="#" id='youtube' target="_blank" rel="noopener noreferrer"
                           class="f-24 color-cinza-claro">
                            <i class="fa-brands fa-youtube f-24"></i>
                        </a>
                    </div>
                </div>
                <script>
                    function validarPost() {
                        if (grecaptcha.getResponse() != "") return true;

                        return false;
                    }
                </script>
                <div class="col-12 col-md-6 col-lg-6">
                    <form action="/join-contact" id="form-post" onsubmit="return validarPost()" method='post'
                          class="d-flex flex-column gap-3 align-items-start">
                        @csrf
                        <input type="hidden" name="midia" value="">
                        <input type="hidden" name="conversao" value="">
                        <input type="hidden" id="cv" name="empreendimentoContato" value="{{ $dataEnterprise->name }}">
                        <input type="hidden" name="cidadeNomeContato" value="{{ $dataEnterprise->cities->city_name }}">
                        <div class="mb-3 w-100">
                            <label for="" class="form-label f-14">Nome Completo</label>
                            <input required type="text" class="form-control bg-dark border-0 shadow-none input-50 "
                                   name="nome"
                                   id="" aria-describedby="helpId" placeholder="" required>
                        </div>
                        <div class="group-form d-md-flex flex-row justify-content-between w-100 gap-3">

                            <div class="mb-3 w-100">
                                <label for="" class="form-label f-14">Telefone para contato</label>
                                <input required type="phone" class="form-control bg-dark border-0 shadow-none input-50 "
                                       name="telefone" id="" aria-describedby="helpId" placeholder="" required>
                            </div>
                            <div class="mb-3 w-100">
                                <label for="" class="form-label f-14">E-mail</label>
                                <input required type="email" class="form-control bg-dark border-0 shadow-none input-50 "
                                       name="email" id="" aria-describedby="helpId" placeholder="" required>
                            </div>
                        </div>
                        <div class="mb-3 w-100">
                            <label for="" class="form-label f-14">Deixe aqui sua mensagem ou sua dúvida.</label>
                            <textarea class="form-control bg-dark border-0 shadow-none  " name="message" id="" rows="5"
                                      required></textarea>
                        </div>
                        <input required type="submit"
                               class="btn border-2 rounded-3 border-verde bg-verde px-5 input-42 d-flex align-items-center color-ciano f-16 hover-ciano"
                               href="#" role="button" value="Enviar">
                    </form>
                    @if(session('form-success'))
                        <small class='text-success'> Mensagem enviada com sucesso</small>
                    @endif
                </div>
            </div>
        </div>
    </section>


    <script>
        function changeImage(status) {

            $('#img-status').attr('src', status.status_image);
            $('#progress-bar').attr('data-content', status.status_progress);
            $('#progress-bar').attr('style', 'width:' + status.status_progress + '%');
        }
    </script>
</main>
@include('site.components.footer')
