@php $paginaNome = 'Imóveis em '.$city->city_name ; @endphp
@include('site.components.header')

<main id="empreendimentos">
    <h1 class="position-absolute color-transparente">Encontre seu imóvel em {{$city->city_name}}</h1>
    <section id="banner" style="background-image:url({{$city->city_banner}}) ;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 mx-center">
                    <h2 class="f-50 f-500 text-center text-wrap w-100">
                        Encontre seu lar de coração
                        nos Empreendimentos Prestes.
                    </h2>
                </div>
            </div>
        </div>
        <div id="nextSection"
             class="position-absolute bottom-0 start-0 end-0 text-center d-flex justify-content-center">
            <a href="#central-cidades" class="d-flex mb-5 flex-column">
                <img src="../assets/img/icon-nextsection.png" alt="Anterior" srcset="">
                <img src="../assets/img/icon-nextsection.png" alt="Próximo" srcset="">
                <img src="../assets/img/icon-nextsection.png" alt="Próximo" srcset="">
            </a>
        </div>
    </section>
    <section id="empreendimentos-lista">
        <div class="container">
            <div class="row pb-5 pt-5">
                <div class="col-12">
                    <p class="f-34 mb-0">Encontre seu imóvel em <span class="f-34 f-700 color-verde">{{$city->city_name}}</span></p>
                </div>
            </div>

            <div class="row">
                @foreach ($enterprises as $enterprise)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-empreendimento">
                            <div class="img-empreendimento">
                                <img src="{{(empty($enterprise->images[0]->image)) ? '../../assets/img/empreendimento-template.png' : $enterprise->images[0]->image}}" alt="{{$enterprise->name}}" srcset="">
                            </div>
                            <div class="desc-empreendimento py-4 px-5">
                                <div class="botao-whatsapp w-100">
                                    <a href="http://" target="_blank"
                                       class="f-40 d-flex align-items-center justify-content-center"><i
                                            class="fa-brands fa-whatsapp"></i></a>
                                </div>
                                <div class="infos-empreendimento">
                                    <p class="status-empreendimento f-14 color-cinza-claro text-uppercase mb-0">
                                        @if(\App\Models\Status::getPercentage($enterprise->id, "5") == "100")
                                            Pronto para morar
                                        @else
                                            Em Obras
                                        @endif
                                    </p>
                                    <p class="nome-empreendimento f-600 f-24 mb-0">{{$enterprise->name}}</p>
                                    <p class="local-empreendimento f-16 color-verde">Bairro {{$enterprise->neighborhood}},
                                        {{$enterprise->cities->city_name}}</p>
                                </div>
                                <div class="detalhes-empreendimento d-grid pt-3">
                                    <div class="d-flex flex-row align-items-center gap-4">
                                        <img src="../assets/img/icon-tamanho.png" alt="Icone guia" srcset="">
                                        <p class="mb-0 f-14">
                                            @if ($enterprise->apartments->pluck('square_meters')->count() > 0)

                                                <?php
                                                $qtdeMetros = $enterprise->apartments->sortBy('square_meters')->pluck('square_meters')->toArray();
                                                if (count($qtdeMetros) != 1) {
                                                    echo min($qtdeMetros) . 'm² a ' . max($qtdeMetros) . 'm²';
                                                } else {
                                                    echo $qtdeMetros[0] . 'm²';
                                                }
                                                ?>

                                            @endif
                                        </p>
                                    </div>
                                    <div class="d-flex flex-row align-items-center gap-4"><img
                                            src="../assets/img/icon-vagas.png" alt="Icone vagas" srcset="">
                                        <p class="mb-0 f-14">{{$enterprise->parking_spaces}} vaga(s)</p>
                                    </div>
                                    @if ($enterprise->apartments->pluck('dormitories')->count() > 0)
                                        <div class="d-flex flex-row align-items-center gap-4"><img
                                                src="../../assets/img/icon-dormitorios.png" alt="Icone dormitórios" srcset="">
                                            <p class="mb-0 f-14">
                                                <?php
                                                $qtdeApto = array_unique($enterprise->apartments->sortBy('dormitories')->pluck('dormitories')->toArray());
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
                                                @if(count($qtdeApto)) Dormitórios @endif
                                            </p>
                                        </div>
                                    @endif
                                    @if ($enterprise->apartments->pluck('suites')->sum() > 0)
                                        <div class="d-flex flex-row align-items-center gap-4"><img
                                                src="../../assets/img/icon-suites.png" alt="Icone Suítes" srcset="">
                                            <p class="mb-0 f-14">
                                                <?php
                                                $qtdeSuites = array_unique($enterprise->apartments->sortBy('suites')->pluck('suites')->toArray());
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
                                                @if(count($qtdeSuites)) Suites @endif
                                            </p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="link-empreendimento">
                                <a class=" mb-5 py-2 btn border-2 border px-4 input-42 d-flex align-items-center f-600 color-grafite f-20 w-auto justify-content-center bg-branco"
                                   href="{{route('enterprise.unico', ['id' => $enterprise->slug_name])}}" role="button"> ver mais </a>
                            </div>
                        </div>


                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <section id="about-empreendimentos">
        <div class="container">
            <div class="row py-5 justify-content-between">
                <div class="col-12 col-md-8 col-lg-4 d-flex align-items-center">
                    <h2 class="f-40 f-400 py-5">Seu lar do coração está em <span class="color-verde">{{@$city->city_name}}.</span>
                    </h2>
                </div>
                <div class="col-12 col-md-12 col-lg-7">
                    <p class="f-22">{{ @$city->city_describe}}</p>
                </div>
            </div>
        </div>
    </section>
    @php $saleCenter = (empty($city->salesCenter)) ? $city->getSalesCenter() : $city->salesCenter ; @endphp

    @if(!empty($saleCenter))
        <section id="contato-empreendimentos">
            <div class="container">
                <div class="row py-5 justify-content-evenly">
                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-center">
                        <h2 class="f-52 f-400 mb-4 mb-md-0">Central de Vendas {{$city->city_name}}</h2>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="local">
                            <div class="endereco d-flex flex-row gap-4 align-items-center mb-4"><img
                                    src="../assets/img/icon-empreendimentos-local.png" alt="Icone empreendimentos" class="img-fluid">
                                <p class="f-22 color-branco mb-0">{{$saleCenter->street . ', ' . $saleCenter->number}}</p>
                            </div>
                            <div class="email d-flex flex-row gap-4 align-items-center mb-4"><img
                                    src="../assets/img/icon-empreendimentos-email.png" alt="Icone E-mail" class="img-fluid">
                                <p class="f-22 color-branco mb-0">{{$saleCenter->mail}}</p>
                            </div>
                            <div class="contato d-flex flex-row gap-4 align-items-center mb-4"><img
                                    src="../assets/img/icon-empreendimentos-wp.png" alt="Icone de para contato" class="img-fluid">
                                <p class="f-22 color-branco mb-0">{{$saleCenter->phone}}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    @endif

    @include('site.components.form-contact', ['page'=>'cidade' , 'cidadeNome'=>$city->city_name])

</main>
@include('site.components.footer')
