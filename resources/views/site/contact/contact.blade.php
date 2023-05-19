@php $paginaNome = 'Contato' ; @endphp
@include('site.components.header')
<link href="{{ asset('assets/css/contact.css') }}" rel="stylesheet">
{{--<section id="contact-banner">--}}
{{--    <div class="container">--}}
{{--        <div class="contact-banner" style="background: url('{{  $contact->url_banner }}') fixed center;">--}}
{{--        </div>--}}
{{--        <div class="d-flex flex-lg-row flex-sm-column justify-content-center" id="row-card">--}}
{{--            <div class="card" style="width: 18rem; height: 15rem; margin-right: 10px; margin-left: 10px;">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="card-title p-4 d-flex justify-content-center">--}}
{{--                        <span class="text-black bg-verde icon-circle"><i class="fa-solid fa-phone"></i></span>--}}
{{--                    </div>--}}
{{--                    <div class="card-title mt-3 text-center text-black">--}}
{{--                        <h4>Telefone:</h4>--}}
{{--                    </div>--}}
{{--                    <div class="card-title mt-3 text-center text-black-50">--}}
{{--                        <p>{{ $contact->phone }}</p>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="card" style="width: 18rem; height: 15rem; margin-right: 10px; margin-left: 10px;">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="card-title p-4 d-flex justify-content-center">--}}
{{--                        <span class="text-black bg-verde icon-circle"><i class="far fa-envelope"></i></span>--}}
{{--                    </div>--}}
{{--                    <div class="card-title mt-3 text-center text-black">--}}
{{--                        <h4>E-mail:</h4>--}}
{{--                    </div>--}}
{{--                    <div class="card-title mt-3 text-center text-black-50">--}}
{{--                        <p>{{ $contact->email }}</p>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="card" style="width: 18rem; height: 15rem; margin-right: 10px; margin-left: 10px;">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="card-title p-4 d-flex justify-content-center">--}}
{{--                        <span class="text-black bg-verde icon-circle"><i class="fas fa-home"></i></span>--}}
{{--                    </div>--}}
{{--                    <div class="card-title mt-3 text-center text-black">--}}
{{--                        <h4>Matriz:</h4>--}}
{{--                    </div>--}}
{{--                    <div class="card-title mt-3 text-center text-black-50">--}}
{{--                        <p>{{ $contact->address }}</p>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<div style="padding-top: 5rem;">
    @include('site.components.form-contact')
</div>

<section id="contact-cards" class="pb-5">
    <div class="container">
        <h3 class="text-center">{{ $contact->titulo_principal_cards }} </h3>
        <div class="d-xl-flex flex-xl-row ps-5 d-flex flex-column justify-content-center align-items-center pe-5 pt-2 pb-5">
            <div class="card mb-5 bg-dark contacts-card m-2"
                 style="width: 32rem; height: 36rem; ">
                <div class="card-body">
                    <a class="text-reset text-white" href="mailto:{{ $contact->email }}" >
                        <div class="card-title pt-4 pb-2">
                            <span class="text-light bg-verde icon-circle "><i
                                    class="fa-regular fa-handshake"></i></span>
                        </div>
                        <div class="mt-3 text-light">
                            <h5 style="font-size: 1.7rem"><strong>Trabalhe conosco</strong></h5>
                        </div>
                        <div class="mt-3 text-light-50">
                            <p style="font-size: 1.2rem;">{{  $contact->texto_trabalhe_conosco }}</p>
                        </div>
                    </a>
                </div>
                <div class="card-footer bg-light contacts-card-footer">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="col-11  d-flex justify-content-center align-items-center text-center">
                            <a href="mailto:{{ $contact->email }}" class="ver-mais text-black"
                               style="font-size: 1.3rem !important;">
                                Entre em contato
                            </a>
                        </div>
                        <div class="col-1 d-flex justify-content-center align-items-center">
                            <span class="text-black chevron-right"><i class="fa-solid fa-chevron-right"></i></span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card mb-5 bg-dark contacts-card m-2"
                 style="width: 32rem; height: 36rem; ">

                <div class="card-body">
                    <a class="text-reset text-white" href="mailto:{{ $contact->email }}">
                        <div class="card-title pt-4 pb-2">
                            <span class="text-light bg-verde icon-circle"><i class="fas fa-home"></i></span>
                        </div>
                        <div class="mt-3 text-light">
                            <h5 style="font-size: 1.7rem"><strong>Compra de Terrenos</strong></h5>
                        </div>
                        <div class="mt-3 text-light-50">
                            <p style="font-size: 1.2rem;">{{  $contact->texto_nossos_terrenos }} </p>
                        </div>
                    </a>
                </div>
                <div class="card-footer bg-light contacts-card-footer">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="col-11  d-flex justify-content-center align-items-center text-center">
                            <a href="mailto:{{ $contact->email }}" class="ver-mais text-black"
                               style="font-size: 1.3rem !important;">
                                Entre em contato
                            </a>
                        </div>
                        <div class="col-1 d-flex justify-content-center align-items-center">
                            <span class="text-black chevron-right"><i class="fa-solid fa-chevron-right"></i></span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card mb-5 bg-dark contacts-card m-2"
                 style="width: 32rem; height: 36rem; ">
                <div class="card-body">
                    <a class="text-reset text-white" href="mailto:{{ $contact->email }}">
                        <div class="card-title pt-4 pb-2">
                            <span class="text-light bg-verde icon-circle"><i class="fas fa-clipboard-list"></i></span>
                        </div>
                        <div class="mt-3 text-light">
                            <h5 style="font-size: 1.7rem"><strong>Fornecedores</strong></h5>
                        </div>
                        <div class="mt-3 text-light-50">
                            <p style="font-size: 1.2rem;">{{ $contact->texto_fornecedores }} </p>
                        </div>
                    </a>

                </div>
                <div class="card-footer bg-light contacts-card-footer">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="col-11  d-flex justify-content-center align-items-center text-center">
                            <a href="mailto:{{ $contact->email }}" class="ver-mais text-black"
                               style="font-size: 1.3rem !important;">
                                Entre em contato
                            </a>
                        </div>
                        <div class="col-1 d-flex justify-content-center align-items-center">
                            <span class="text-black chevron-right"><i class="fa-solid fa-chevron-right"></i></span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card mb-5 bg-dark contacts-card m-2"
                 style="width: 32rem; height: 36rem; ">
                <div class="card-body">
                    <a class="text-reset text-white" href="{{ $contact->link_alo_conduta }}">
                        <div class="card-title pt-4 pb-2">
                            <span class="text-light icon-circle bg-verde"><i class="fa fa-book"></i></span>
                        </div>
                        <div class="mt-3 text-light">
                            <h5 style="font-size: 1.7rem"><strong>Alô conduta</strong></h5>
                        </div>
                        <div class="mt-3 text-light-50">
                            <p style="font-size: 1.2rem;">{{  $contact->texto_alo_conduta  }} </p>
                        </div>
                    </a>
                </div>
                <div class="card-footer bg-light contacts-card-footer">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="col-11  d-flex justify-content-center align-items-center text-center">
                            <a href="{{ $contact->link_alo_conduta }}" class="ver-mais text-black"
                               style="font-size: 1.3rem !important;">
                                Ver mais
                            </a>
                        </div>
                        <div class="col-1 d-flex justify-content-center align-items-center">
                            <span class="text-black chevron-right"><i class="fa-solid fa-chevron-right"></i></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
@include('site.components.footer')


<script>

    $('.ver-mais').mouseover(function () {
        $(this).parent().parent().find('.chevron-right').show()
        $(this).parent().parent().parent().addClass('green-default');

        g
    }).mouseleave(function () {
        $(this).parent().parent().find('.chevron-right').hide();
        $(this).parent().parent().parent().removeClass('green-default')
    });


</script>
