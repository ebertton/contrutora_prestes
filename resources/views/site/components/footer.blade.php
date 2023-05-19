<section id="contato" class="bg-ciano position-relative d-flex align-items-center">
    <div class="container pt-3">
        <div class="row py-5 justify-content-center align-items-center">
            <div
                class="col-12 col-md-7 col-lg-3 d-flex justify-content-center justify-content-lg-start d-lg-block">
                <a href="#" id='whatsapp' target="_blank" rel="noopener noreferrer"
                   class=" pb-3 f-22 f-700 color-branco d-flex gap-3 align-items-center">
                    <i class="fa-brands fa-whatsapp color-verde f-26"></i><span>Contato via Whatsapp</span>
                </a>
            </div>
            <div
                class="col-12 col-md-7 col-lg-3 d-flex justify-content-center justify-content-lg-start d-lg-block">
                <a href="#" id='chat' target="_blank" rel="noopener noreferrer"
                   class=" pb-3 f-22 f-700 color-branco d-flex gap-3 align-items-center">
                    <i class="fa-solid fa-comments color-verde f-26"></i><span>Contato via Chat</span>
                </a>
            </div>
            <div
                class="col-12 col-md-7 col-lg-3 d-flex justify-content-center justify-content-lg-start d-lg-block">
                <a href="#" id='mail-contact' target="_blank" rel="noopener noreferrer"
                   class=" pb-3 f-22 f-700 color-branco d-flex gap-3 align-items-center">
                    <i class="fa-regular fa-envelope color-verde f-26"></i><span>Contato via E-mail</span>
                </a>
            </div>
        </div>
    </div>
</section>


<footer>
    <div class="container py-5">
        <div class="row py-5 justify-content-between">
            <div class="col-12 col-md-12 col-lg-12 col-xl-2 py-3">
                <img src="/assets/img/img-logo.png" alt="Logotipo Prestes" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2 py-3">
                <ul class="list-unstyled d-flex flex-column gap-2 mb-0 links-menu">
                    <li class="nav-item color-branco f-20 f-600">Institucional</li>
                    <li><a href="/sobre" class="nav-item color-branco f-14">Sobre</a></li>
                    <li><a href="/sobre#nossa-historia" class="nav-item color-branco f-14">História</a></li>
                    <li><a href="/sobre#missao-visao" class="nav-item color-branco f-14">Missão</a></li>
                    <li><a href="/sobre#missao-visao" class="nav-item color-branco f-14">Visão</a></li>
                    <li><a href="/sobre#missao-visao" class="nav-item color-branco f-14">Valores</a></li>
                    <li><a href="{{route('politica.privacidade')}}" class="nav-item color-branco f-14">Política de
                            Privacidade</a></li>
                    <li><a href="https://drive.google.com/file/d/1CM4IA0q0HeZvUy_QFm41BzwFG_eTXyTH/view?usp=sharing"
                           class="nav-item color-branco f-14">Código de Ética e Conduta</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2 py-3">
                <ul class="list-unstyled d-flex flex-column gap-2 mb-0 links-menu">
                    <li class="nav-item color-branco f-20 f-600">Empreendimentos</li>
                    @foreach(\App\Models\City::all() as $city)
                        <li><a href="{{route('empreeendimento.index', ['city'=> $city->slug_name])}}"
                               class="nav-item color-branco f-14">{{$city->city_name}}</a></li>
                    @endforeach

                    <!--
                        <li><a href="#" class="nav-item color-branco f-14">Castro</a></li>
                        <li><a href="#" class="nav-item color-branco f-14">Curitiba</a></li>
                        <li><a href="#" class="nav-item color-branco f-14">Guarapuava</a></li>
                        <li><a href="#" class="nav-item color-branco f-14">Londrina</a></li>
                        <li><a href="#" class="nav-item color-branco f-14">Ponta Grossa</a></li>

                        -->
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2 py-3">
                <ul class="list-unstyled d-flex flex-column gap-2 mb-0 links-menu">
                    <li class="nav-item color-branco f-20 f-600">Vendas</li>
                    <li><a href="/central-de-vendas" class="nav-item color-branco f-14">Nossas lojas</a></li>
                    <li><a href="https://prestes.com/#nossos-imoveis"
                           class="nav-item color-branco f-14">Empreendimentos</a></li>
                    <li><a href="https://prestes-1.rds.land/prestes-indique-e-ganhe-2022"
                           class="nav-item color-branco f-14">Indique e Ganhe</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2 py-3">
                <ul class="list-unstyled d-flex flex-column gap-2 mb-0 links-menu">
                    <li class="nav-item color-branco f-20 f-600">Contato</li>
                    <li><a href="/contato" class="nav-item color-branco f-14">Contatos</a></li>
                    <li><a href="/contato" class="nav-item color-branco f-14">Compra de Terrenos</li>
                    <li><a href="https://prestes.cvcrm.com.br/cliente/" class="nav-item color-branco f-14">Portal do
                            Cliente</a></li>
                    <li><a href="https://www.canalintegro.com.br/prestes" class="nav-item color-branco f-14">Alô
                            Conduta</a></li>
                    <li><a href="/contato" class="nav-item color-branco f-14">Fornecedor</a></li>
                    <li><a href="/contato" class="nav-item color-branco f-14">Trabalhe Conosco</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="politica-privacidade"
         class="py-5 border-1 border-cinza-escuro position-fixed bottom-0 start-0 end-0 bg-preto">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-md-8 col-lg-7">
                    <h2 class="f-20 f-600 mb-4">Privacidade</h2>
                    <p id="texto-privacidade" class="f-14"> - </p>
                </div>
                <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                    <a class="btn border-2 border-cinza-claro px-3 input-42 d-flex align-items-center justify-content-center color-cinza-claro f-16 hover-verde"
                       href="#" role="button">Entendi</a>
                </div>
            </div>
        </div>
    </div>
    <div id="fixed-sociais" class="position-fixed end-0 d-flex flex-column gap-3 justify-content-end align-items-end">
        <a href="http://" id='fixed-whatsapp' target="_blank" rel="noopener noreferrer"
           class="d-flex align-items-center gap-3 bg-branco justify-content-center">
            <i class="fa-brands fa-whatsapp color-preto f-26"></i>
            <span class="f-16 color-ciano">WhatsApp</span>
        </a>
        <a href="http://" id="float-chat" target="_blank" rel="noopener noreferrer"
           class="d-flex align-items-center gap-3 bg-branco justify-content-center">
            <i class="fa-solid fa-comments color-preto f-26"></i>
            <span class="f-16 color-ciano">Chat</span>
        </a>
        {{--        <a href="http://" id='fixed-email' target="_blank" rel="noopener noreferrer"--}}
        {{--           class="d-flex align-items-center gap-3 bg-branco justify-content-center">--}}
        {{--            <i class="fa-regular fa-envelope color-preto f-26"></i>--}}
        {{--            <span class="f-16 color-ciano">E-mail</span>--}}
        {{--        </a>--}}
        {{--        <a href="/contato" id='fixed-contact' class="d-flex align-items-center gap-3 bg-branco justify-content-center">--}}
        {{--            <i class="fa-solid fa-file-pen color-preto f-26"></i>--}}
        {{--            <span class="f-16 color-ciano">Contato</span>--}}
        {{--        </a>--}}
    </div>
</footer>
<script src="../../assets/plugins/jquery-3.6.0.min.js"></script>
<script src="../../assets/plugins/mask.js"></script>
<script src="../../assets/plugins/popper.min.js"></script>
<script src="../../assets/plugins/bootstrap5/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/plugins/slick-1.8.1/slick/slick.min.js"></script>
<script src="../../assets/plugins/plyr-3.7.2/plyr.js"></script>
<script src="../../assets/plugins/plyr-3.7.2/plyr.polyfilled.js"></script>
<script src="../../assets/plugins/jquery-ui.js"></script>
<script src="../../assets/plugins/index.bundle.min.js"></script>
<script src="../../assets/js/general.js"></script>
<script src="https://unpkg.com/blip-chat-widget" type="text/javascript">
</script>
<script>
    (function () {
        window.onload = function () {
            new BlipChat()
                .withAppKey('cHJlc3RpbmhvOmRhYThhOGUwLWRlMTUtNDhmYy1iNTgxLTgwNjZmODBmNDcyOQ==')
                .withButton({"color": "#2CC3D5", "icon": ""})
                .withCustomCommonUrl('https://chat.blip.ai/')
                .build();
        }
    })();
</script>

</body>

</html>

<script>
    $.ajax({
        url: "/contact/get",
        context: document.body
    }).done(function (contact) {
        $('#title_contact').html(contact.title_contact);
        $('#text_contact').html(contact.text_contact);
        $('#phone').html(contact.phone);
        $('#email').html(contact.email);
        $('#address').html(contact.address);
        $('#facebook').attr('href', contact.facebook);
        $('#instagram').attr('href', contact.instagram);
        $('#youtube').attr('href', contact.youtube);
        $('#whatsapp').attr('href', contact.whatsapp);
        $('#mail-contact').attr('href', 'mailto:' + contact.email);
        $('#fixed-whatsapp').attr('href', contact.whatsapp);
        $('#fixed-email').attr('href', 'mailto:' + contact.email);

    });
</script>
<script>
    $.ajax({
        url: "{{route('get.privacy.polices')}}",
        context: document.body
    }).done(function (response) {
        console.log(response)
        $('#texto-privacidade').html(response.text + ' ' + '<a class="text-white text-decoration-underline"  href="' + response.url + '">Saiba mais</a>');

    });
</script>
<script>
    function setOrigemMedia() {
        let referrer = document.referrer;
        let utms = getQueryParameter('utm_source');
        let utmm = getQueryParameter('utm_medium');
        let utmc = getQueryParameter('utm_campaign');

        let midia = 'Acesso Direto';
        let conversao = 'Acesso Direto';

        if (referrer) {
            midia = 'Google Orgânico';
            conversao = 'Google Orgânico';
        }

        if (utms) {
            midia = utms + ' > ' + utmm;
            conversao = utmc;
        }

        let origem = {
            midia,
            conversao
        };
        $('input[name=midia]').val(midia);
        $('input[name=conversao]').val(conversao);
        // a função salva um obj com a midia e a conversão.
        sessionStorage.setItem(
            'origem-eph-media', //item que armazena a midia.
            JSON.stringify(origem)
        );
    }

    function getQueryParameter(param) {
        return new URLSearchParams(document.location.search
            .substring(1)).get(param);
    }

    $(document).ready(function () {
        setOrigemMedia(); //seta a origem assim que a página é carregada;
    });

    /*
    grecaptcha.ready(function () {
        grecaptcha.execute('SITE_KEY', {action: 'homepage'})
            .then(function (token) {
                //console.log(token);
                document.getElementById('g-recaptcha-response').value = token;
            });
    });
    */

    var multipleCardCarousel = document.querySelector(
        "#carouselExampleControls"
    );
    if (window.matchMedia("(min-width: 768px)").matches) {
        var carousel = new bootstrap.Carousel(multipleCardCarousel, {
            interval: false,
        });
        var carouselWidth = $('.carousel-blog').find(".carousel-inner")[0].scrollWidth;
        var cardWidth = $('.carousel-blog').find(".carousel-item").width();
        var scrollPosition = 0;
        $("#carouselExampleControls .carousel-control-next").on("click", function () {
            if (scrollPosition < carouselWidth - cardWidth * 2) {
                scrollPosition += cardWidth;
                $("#carouselExampleControls .carousel-inner").animate(
                    {scrollLeft: scrollPosition},
                    600
                );
            }
        });
        $("#carouselExampleControls .carousel-control-prev").on("click", function () {
            if (scrollPosition > 0) {
                scrollPosition -= cardWidth;
                $("#carouselExampleControls .carousel-inner").animate(
                    {scrollLeft: scrollPosition},
                    600
                );
            }
        });
    } else {
        $(multipleCardCarousel).addClass("slide");
    }
</script>

<style>
    /*------ slider width ------*/
    .locais .slider {
        width: 70%;
        margin: 0 auto;
    }

    /*------ slider image ------*/
    .locais .slider img {
        width: 100%;
    }

    /*-------- height ----------*/
    .locais .slider .slick-slide {
        height: auto !important;
    }

    /*--------- arrows ---------*/
    .locais .slick-next {
        right: 0 !important;
    }

    .locais .slick-prev {
        left: 0 !important;
    }

    .locais .slick-arrow {
        z-index: 2 !important;
    }


    .locais .slick-arrow:before {
        content: "" !important;
    }

    .locais .slick-arrow:before {
        content: "" !important;
        width: 100% !important;
        height: 100% !important;
        position: absolute;
        top: 0;
        left: 0;
    }

    .locais .slick-next:before {
        background: url('/assets/img/arr-right.png') !important;
        background-size: contain !important;
        background-repeat: no-repeat !important;
    }

    .locais .slick-prev:before {
        background: url('/assets/img/arr-left.png ') !important;
        background-size: contain !important;
        background-repeat: no-repeat !important;
    }

    .locais .slick-arrow {
        z-index: 2 !important;
        width: 40px !important;
        height: 40px !important;
    }

    .locais .slick-next {
        right: 0 !important;
    }

    .locais .slick-prev {
        left: 0px !important;
    }

    @media (max-width: 600px) {
        .locais .slick-arrow {
            width: 20px !important;
            height: 20px !important;
        }
    }

    @media (min-width: 800px) {
        .lista-locais .slick-list {
            width: 95% !important;
            margin-left: 15px;

        }
    }

    .conquistas .slick-arrow:before {
        content: "" !important;
        width: 100% !important;
        height: 100% !important;
        position: absolute;
        top: 0;
        left: 0;
    }

    .conquistas .slick-next:before {
        /*background: url('/assets/img/arr-right.png') !important;*/
        background-size: contain !important;
        background-repeat: no-repeat !important;
        background-color: var(--verde) !important;
        border-radius: 100%;
        opacity: 100% !important;
    }

    .conquistas .slick-prev:before {
        /*background: url('/assets/img/arr-left.png') !important;*/
        background-size: contain !important;
        background-repeat: no-repeat !important;
        background-color: var(--verde) !important;
        border-radius: 100%;
        opacity: 100% !important;


    }

    .conquistas .slick-arrow {
        z-index: 2 !important;
        width: 40px !important;
        height: 40px !important;

    }

    .conquistas .slick-prev {
        left: 0px;
        top: 54px !important;
    }
    .conquistas .slick-next {
        right: 10px;
        top: 54px !important;
    }
    .conquistas .slick-prev a:hover, button:hover {
        opacity: 100% !important;
    }
    .conquistas .slick-next a:hover, button:hover {
        opacity: 100% !important;
    }

</style>
