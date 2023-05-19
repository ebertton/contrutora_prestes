@include('site.components.header')
<main id="central-vendas">
{{--    <section id="banner" style="background-image:url('../assets/img/banner-central-vendas.png') ;">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-12 col-md-10 mx-center">--}}
{{--                    <h2 class="f-60 f-500 underline-style-center text-center">--}}
{{--                        Em todas as cidades, a melhor equipe para atender você.--}}
{{--                    </h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div id="nextSection"--}}
{{--             class="position-absolute bottom-0 start-0 end-0 text-center d-flex justify-content-center">--}}
{{--            <a href="#central-cidades" class="d-flex mb-5 flex-column">--}}
{{--                <img src="../assets/img/icon-nextsection.png" alt="" srcset="">--}}
{{--                <img src="../assets/img/icon-nextsection.png" alt="" srcset="">--}}
{{--                <img src="../assets/img/icon-nextsection.png" alt="" srcset="">--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </section>--}}
    <section id="central-cidades">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 mt-5 pt-5">
                    <div class="d-flex flex-column flex-md-row justify-content-center">
                        <h2 class="text-center f-40 f-600">Em todas as cidades, a melhor equipe para atender você</h2>
                    </div>
                    <div class="locais mt-4">
                        <ul class="nav nav-tabs lista-locais list-unstyled gap-4 gap-xl-3 gap-xxl-4 mb-0 border-0 justify-content-center"
                            id="listaLocaisVendas" role="tablist">

                            @foreach(array_unique($salesCenter->pluck('city')->toArray()) as $key => $city)
                                <li class="nav-item ms-4 me-2" role="presentation" style="white-space: nowrap">
                                    <a @class(['nav-link color-branco text-capitalize f-400 f-16', 'active'=>$key==0])   id="tab-{{$city}}"
                                       data-bs-toggle="tab" href="#teste-{{$city}}" role="tab"
                                       aria-controls="{{strtolower($city)}}"
                                       aria-selected="true">{{\App\Models\Enterprise::pegaNome($city)}}</a>
                                </li>
                            @endforeach

                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row pb-5">
                <div class="col-12 pe-0">
                    <div class="tab-content" id="listaLocaisVendasContent">
                        @foreach ($salesCenter as $key => $saleCenter)
                            <div
                                @class(['tab-pane fade  show', 'active'=>$key==0]) id="teste-{{$saleCenter->cities->id}}"
                                role="tabpanel"
                                aria-labelledby="tab-{{$saleCenter->cities->id}}">
                                <div class="col-12 col-lg-12">
                                    <iframe
                                        src="https://maps.google.com/maps?q={{urlencode($saleCenter->street . ' ' . $saleCenter->number . ', ' . $saleCenter->zip_code . ', ' . $saleCenter->cities->city_name . ' - ' . $saleCenter->state)}}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                        height="450" width='100%' style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                                </div>
{{--                                <h3 class="text-center f-32 f-400 py-5">Central de--}}
{{--                                    Vendas {{$saleCenter->cities->city_name}}</h3>--}}

                                <div class="local mx-auto py-5">
                                    @if(\App\Models\SalesCenter::qtdeDeEnderecos($saleCenter->city) > 1)
                                        @foreach(\App\Models\SalesCenter::verificacaoMaisDeUmContato($saleCenter->city) as $enderecoDuplo)
                                            <div class="endereco d-flex flex-row gap-4 align-items-center mb-4">
                                                <img src="../assets/img/localizacao.png" alt="" class="img-fluid">
                                                <a href="https://www.google.com/maps/search/{{$enderecoDuplo->street . ', ' .$enderecoDuplo->number . ' - ' .$enderecoDuplo->neighborhood .', ' .$enderecoDuplo->cities->city_name . ' - ' .$enderecoDuplo->state.' - '.$enderecoDuplo->zip_code}}">

                                                <p class="f-22 color-cinza-claro mb-0">
                                                    {{
                                                        $enderecoDuplo->street . ', ' .
                                                        $enderecoDuplo->number . ' - ' .
                                                        $enderecoDuplo->neighborhood .', ' .
                                                        $enderecoDuplo->cities->city_name . ' - ' .
                                                        $enderecoDuplo->state.' - '.
                                                        $enderecoDuplo->zip_code
                                                    }}

                                                </p>
                                            </a>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="endereco d-flex flex-row gap-4 align-items-center mb-4">
                                            <img src="../assets/img/localizacao.png" alt="" class="img-fluid">
                                            <a href="https://www.google.com/maps/search/{{$saleCenter->street . ', ' .$saleCenter->number . ' - ' .$saleCenter->neighborhood .', ' .$saleCenter->cities->city_name . ' - ' .$saleCenter->state.' - '.$saleCenter->zip_code}}">
                                            <p class="f-22 color-cinza-claro mb-0">
                                            {{
                                                $saleCenter->street . ', ' .
                                                $saleCenter->number . ' - ' .
                                                $saleCenter->neighborhood .', ' .
                                                $saleCenter->cities->city_name . ' - ' .
                                                $saleCenter->state.' - '.
                                                $saleCenter->zip_code}}

                                            </p>
                                        </a>
                                        </div>
                                    @endif
                                    <div class="email d-flex flex-row gap-4 align-items-center mb-4"><img
                                            src="../assets/img/email.png" alt="" class="img-fluid">
                                        <p class="f-22 color-cinza-claro mb-0">{{$saleCenter->mail}}</p></div>
                                    <div class="contato d-flex flex-row gap-4 align-items-center mb-4"><img
                                            src="../assets/img/whatsapp.png" alt="" class="img-fluid">
                                        <p class="f-22 color-cinza-claro mb-0">{{$saleCenter->phone}}</p></div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@include('site.components.footer')
