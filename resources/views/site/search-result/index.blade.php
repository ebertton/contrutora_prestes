@php $paginaNome = 'Resultado de busca'; @endphp
@include('site.components.header')

<main style='margin-top: 12em' id="resultado-busca">
    <h1 class="position-absolute color-transparente">Resultado de busca</h1>
    <section id="resultado">
        <div class="container">
            <div class="row pb-5">
                <div class="col-12">
                    <p class="text-center f-24 mb-0">Você pesquisou por:</p>
                    <p class="f-40 f-700 color-verde text-center">{{ @$_GET['termo'] . ' ' . (@$_GET['dormitorios'] !== null && @$_GET['dormitorios'] !== '' ? ' Dormitório(s): ' . @$_GET['dormitorios'] : '') .  (@$_GET['suites'] !== null && @$_GET['suites'] !== '' ? ' Suíte(s): '. @$_GET['suites'] : '' ). (@$_GET['garagens'] !== null && @$_GET['garagens'] !== '' ? ' Garagem(s): '. @$_GET['garagens'] : '')}}</p>
                </div>
            </div>
            @if(@$enterprises)
                <div class="row justify-content-center mt-5">
                    @foreach($enterprises as $enterprise)
                        <div class=" col-12 col-md-6 col-lg-5">
                            <a href="{{route('enterprise.unico', ['id' => $enterprise->slug_name])}}"
                               class="text-decoration-none text-white">
                                <div class="single-empreendimento mw-100">
                                    <div class="img-empreendimento">
                                        <img
                                            src="{{(empty($enterprise->images[0]->image) ? asset('/assets/img/empreendimento-template.png') : asset($enterprise->images[0]->image))}}"
                                            alt="imagem empreendimento {{$enterprise->name}}" srcset="">
                                    </div>
                                    <div class="desc-empreendimento py-4 px-5">
                                        {{--                                    <div class="botao-whatsapp w-100">--}}
                                        {{--                                        <a href="{{$contato->whatsapp}}" target="_blank"--}}
                                        {{--                                           class="f-40 d-flex align-items-center justify-content-center"><i--}}
                                        {{--                                                class="fa-brands fa-whatsapp"></i></a>--}}
                                        {{--                                    </div>--}}
                                        <div class="infos-empreendimento">
                                            <p class="status-empreendimento f-14 color-cinza-claro text-uppercase mb-0">
                                                @if (\App\Models\Status::getPercentage($enterprise->id, "5") == "100")
                                                    PRONTO PARA MORAR
                                                @else
                                                    EM OBRAS
                                                @endif</p>
                                            <p class="nome-empreendimento f-600 f-24 mb-0">{{$enterprise->name}}</p>
                                            <p class="local-empreendimento f-16 color-verde">
                                                {{'Bairro ' . $enterprise->neighborhood .  ', ' . $enterprise->cities->city_name }}
                                            </p>
                                        </div>
                                        <div class="detalhes-empreendimento d-grid pt-3">
                                            <div class="d-flex flex-row align-items-center gap-4"><img
                                                    src="../assets/img/icon-tamanho.png" alt="Icone de Tamanho"
                                                    srcset="">
                                                <p class="mb-0 f-14">
                                                        <?php
                                                        $qtdeMetros = $enterprise->apartments->sortBy('square_meters')->pluck('square_meters')->toArray();
                                                        if (count($qtdeMetros) != 1) {
                                                            echo (sizeof($qtdeMetros) > 0 ? min($qtdeMetros) : '0') . 'm² a ' . (sizeof($qtdeMetros) > 0 ? max($qtdeMetros) : '0') . 'm²';
                                                        } else {
                                                            echo isset($qtdeMetros[0]) ? $qtdeMetros[0] : '0' . 'm²';
                                                        }
                                                        ?>
                                                </p>
                                            </div>
                                            <div class="d-flex flex-row align-items-center gap-4"><img
                                                    src="../assets/img/icon-vagas.png" alt="Icone de vagas" srcset="">
                                                <p class="mb-0 f-14">{{$enterprise->parking_spaces}} vaga(s) de<br>
                                                    garagem
                                                </p>
                                            </div>
                                            <div class="d-flex flex-row align-items-center gap-4"><img
                                                    src="../assets/img/icon-dormitorios.png" alt="Icone de dormitórios"
                                                    srcset="">
                                                <p class="mb-0 f-14">
                                                        <?php
                                                        $qtdeApto = $enterprise->apartments->sortBy('dormitories')->pluck('dormitories')->toArray();
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
                                                    Dormitório(s)
                                                </p>
                                            </div>
                                            @if ($enterprise->apartments->pluck('suites')->sum() > 0)
                                                <div class="d-flex flex-row align-items-center gap-4"><img
                                                        src="assets/img/icon-suites.png" alt="Suítes: " srcset="">
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
                                           href="{{route('enterprise.unico', ['id'=>$enterprise->slug_name])}}"
                                           role="button"> ver
                                            mais </a>
                                    </div>
                                </div>
                            </a>
                        </div>

                    @endforeach

                </div>
            @endif
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto text-center">
                    @if($errors->any())
                        <h2 class="f-52 f-400 text-center py-5">{{$errors->first()}}</h2>
                    @endif

                    <form action="{{route('search.enterprise')}}" method="get">
                        @csrf
                        @method('GET')
                        <div class="mb-3 d-flex flex-column flex-md-row">
                            <input type="text"
                                   class="form-control bg-dark shadow-none border-0 input-50 color-cinza-claro"
                                   name="termo" id="" placeholder="Digite o termo que procura">
                            <div class="d-grid gap-2 w-25">
                                <button type="submit" name="" id="submit-busca"
                                        class="text-nowrap hover-verde btn bg-branco f-700 input-42 d-flex align-items-center gap-3 justify-content-center f-16 px-4">
                                    Fazer
                                    nova busca<i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                        <div class="row col-12">
                            <div class="col-2">
                                <select
                                    class="form-select form-control bg-dark shadow-none border-0 input-50 color-cinza-claro"
                                    name="dormitorios" aria-label="Default select">
                                    <option value="" selected>Dormitórios</option>
                                    <option value="1">1 Dormitório(s)</option>
                                    <option value="2">2 Dormitório(s)</option>
                                    <option value="3">3 Dormitório(s)</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <select
                                    class="form-select form-control bg-dark shadow-none border-0 input-50 color-cinza-claro"
                                    name="suites" aria-label="Default select">
                                    <option value="" selected>Suítes</option>
                                    <option value="1">1 Suíte(s)</option>
                                    <option value="2">2 Suíte(s)</option>
                                    <option value="3">3 Suíte(s)</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <select
                                    class="form-select form-control bg-dark shadow-none border-0 input-50 color-cinza-claro"
                                    name="garagens" aria-label="Default select">
                                    <option value="" selected>Garagen(s)</option>
                                    <option value="1">1 Garagen(s)</option>
                                    <option value="2">2 Garagen(s)</option>
                                    <option value="3">3 Garagen(s)</option>
                                </select>
                            </div>

                        </div>
                    </form>
                    @if(@$sugestoes)
                        <div class="col-12">
                            <p class="text-center f-24 mb-0">Imóveis que você pode gostar:</p>
                        </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                @foreach($sugestoes as $enterprise)
                    <div class=" col-12 col-md-6 col-lg-5">
                        <div class="single-empreendimento mw-100">
                            <div class="img-empreendimento">
                                <img
                                    src="{{(empty($enterprise->images[0]->image) ? asset('/assets/img/empreendimento-template.png') : asset($enterprise->images[0]->image))}}"
                                    alt="Imagem {{$enterprise->name}}" srcset="">
                            </div>
                            <div class="desc-empreendimento py-4 px-5">
                                {{--                                <div class="botao-whatsapp w-100">--}}
                                {{--                                    <a href="{{$contato->whatsapp}}" target="_blank"--}}
                                {{--                                       class="f-40 d-flex align-items-center justify-content-center"><i--}}
                                {{--                                            class="fa-brands fa-whatsapp"></i></a>--}}
                                {{--                                </div>--}}
                                <div class="infos-empreendimento">
                                    <p class="status-empreendimento f-14 color-cinza-claro text-uppercase mb-0">
                                        @if(\App\Models\Status::getPercentage($enterprise->id, "5") == "100")
                                            Pronto para morar
                                        @else
                                            Em Obras
                                        @endif</p>
                                    <p class="nome-empreendimento f-600 f-24 mb-0">{{$enterprise->name}}</p>
                                    <p class="local-empreendimento f-16 color-verde">
                                        {{'Bairro ' . $enterprise->neighborhood .  ', ' . $enterprise->cities->city_name }}
                                    </p>
                                </div>
                                <div class="detalhes-empreendimento d-grid pt-3">
                                    <div class="d-flex flex-row align-items-center gap-4"><img
                                            src="../assets/img/icon-tamanho.png" alt="Icone tamanho" srcset="">
                                        <p class="mb-0 f-14">
                                                <?php
                                                $qtdeMetros = $enterprise->apartments->sortBy('square_meters')->pluck('square_meters');
                                                $var = 1;
                                                foreach ($qtdeMetros as $value) {
                                                    if ($var >= count($qtdeMetros) && count($qtdeMetros) != 1) {
                                                        echo " e " . $value . 'm²';
                                                    } else {
                                                        if ($var != 1) {
                                                            echo ', ' . $value . 'm²';
                                                        } else {
                                                            echo $value . 'm²';
                                                        }
                                                    }
                                                    $var++;
                                                }
                                                ?>
                                        </p>
                                    </div>
                                    <div class="d-flex flex-row align-items-center gap-4"><img
                                            src="../assets/img/icon-vagas.png" alt="Icone vagas" srcset="">
                                        <p class="mb-0 f-14">{{$enterprise->parking_spaces}} vaga(s) de<br> garagem</p>
                                    </div>
                                    <div class="d-flex flex-row align-items-center gap-4"><img
                                            src="../assets/img/icon-dormitorios.png" alt="Icone dormitórios" srcset="">
                                        <p class="mb-0 f-14">
                                                <?php
                                                $qtdeApto = $enterprise->apartments->sortBy('dormitories')->pluck('dormitories');
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
                                    @if ($enterprise->apartments->pluck('suites')->count() > 0)
                                        <div class="d-flex flex-row align-items-center gap-4"><img
                                                src="assets/img/icon-suites.png" alt="Icone suítes" srcset="">
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
                                   href="{{route('enterprise.unico', ['id'=>$enterprise->id])}}" role="button"> ver
                                    mais </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            @endif
            <div class="row">
                <div class="col-12 text-center">
                    <a class="btn border-2 bg-branco px-4 input-42 color-preto f-16 hover-verde f-700 rounded-3 text-nowrap mt-5"
                       href="/" role="button">Voltar para home</a>
                </div>
            </div>

        </div>
    </section>
    @include('site.components.form-contact')

</main>
@include('site.components.footer')
