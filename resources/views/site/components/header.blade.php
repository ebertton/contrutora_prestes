<?php
    /*
define('SITE_KEY', '6Le-KdohAAAAAOKCXPN1WrKrfBTa4ZapUSN6zmOg');
define('SECRET_KEY', '6Le-KdohAAAAAKELpH3FK_VpNDAe_NYu2fNAcgN4');

if($_POST){
    function getCaptcha($SecretKey){
        $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
        $Return = json_decode($Response);
        return $Return;
    }
    $Return = getCaptcha($_POST['g-recaptcha-response']);
    //var_dump($Return);
    if($Return->success == true && $Return->score > 0.5){
        echo "Succes!";
    }else{
        echo "You are a Robot!!";
    }
}
    */
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PJVPGZ7');
    </script>
   <!-- <script src='https://www.google.com/recaptcha/api.js?render='></script>-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJVPGZ7"
                height="0" width="0" style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestes Construtora - Incorporação Imobiliária no Paraná</title>
    <meta id="description" name="description" content="{{ isset($description) ? $description : 'Está a procura de imóveis à venda? Conheça os empreendimentos da Prestes e se encante com toda a segurança e conforto que eles oferecem!' }}">
    <link rel="stylesheet" href="../../assets/css/general.css">
    <link rel="stylesheet" href="../../assets/plugins/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/plugins/bootstrap5/css/bootstrap-icons.css">
    <link rel="stylesheet" href="../../assets/plugins/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="../../assets/plugins/slick-1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" href="../../assets/plugins/plyr-3.7.2/plyr.css">
    <link rel="stylesheet" href="../../assets/plugins/jquery-ui.css">

    <link rel="icon" type="imagem/png" href="{{asset('/assets/img/favicon.png')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/blog-home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/parallax-empreendimentos.css') }}">
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJVPGZ7"
            height="0" width="0" style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->




<header>
    <nav class="navbar bg-gradient-preto">
        <div class="container header-container">
            <div class="row w-100">
                <div class="col-12">
                    <div class="mobile-nav d-flex d-lg-none w-100 justify-content-between">
                        <div class="sandwich">
                            <label for="mobile-check">
                                <input type="checkbox" id="mobile-check" />
                                <span class="line-1"></span>
                                <span class="line-2"></span>
                                <span class="line-3"></span>
                            </label>
                        </div>
                        <div class="logo d-flex align-items-center">
                            <a href='/'><img src="/assets/img/img-logo.png" alt="Logotipo Construtora Prestes" class="img-fluid" width="130"></a>
                        </div>
                    </div>
                    <div
                        class="menu d-flex flex-column flex-lg-row align-items-center gap-4 justify-content-between w-100 py-4">
                        <div class="sandwich d-none d-lg-block">
                            <label for="check">
                                <input type="checkbox" id="check" />
                                <span class="line-1"></span>
                                <span class="line-2"></span>
                                <span class="line-3"></span>
                            </label>
                        </div>
                        <ul
                            class="list-unstyled d-flex flex-column flex-xl-row gap-4 gap-xl-3 gap-xxl-4 mb-0 links-menu">
                            <li><a href="/sobre" class="nav-item color-branco f-18">Sobre</a></li>
                            <li><a href="/#nossos-imoveis" class="nav-item color-branco f-18">Empreendimentos</a></li>
                            <li><a href="/central-de-vendas" class="nav-item color-branco f-18">Nossas Lojas</a></li>
                            <li><a href="{{ route('site.blog.index') }}" class="nav-item color-branco f-18">Blog</a></li>
                            <li><a href="/contato"   class="nav-item color-branco f-18">Contato</a></li>
                            <li><a href="https://prestes.cvcrm.com.br/cliente/" target="_blank" class="nav-item color-branco f-18">Área do Cliente</a></li>
                        </ul>
                        <div class="logo align-items-center d-none d-lg-flex">
                            <a href='/'><img src="/assets/img/img-logo.png" alt="Logotipo Construtora Prestes" class="img-fluid" width="130"></a>
                        </div>
                        <div
                            class="extra d-flex flex-column flex-lg-row align-items-center align-items-lg-start gap-3 position-relative">
                            <label for="buscar" id="label-buscar" class="input-41 d-flex align-items-center px-3">
                                <form method="GET" action="{{route('search.enterprise')}}">
                                    @method('GET')
                                    @csrf
                                    <input required type="text" name="termo" id="buscar"
                                           class="color-branco bg-transparent f-19 border-0 input-49 mb-2"
                                           placeholder="Faça sua busca...">
                                    <i class="fa-solid fa-magnifying-glass f-49 pt-2"></i>
                                </form>

                            </label>
{{--                            <a class="btn border-2 border  px-4  input-42 d-flex align-items-center color-branco f-16 hover-verde"--}}
{{--                                href="https://prestes.cvcrm.com.br/cliente/" role="button" target="_blank">Área do Cliente </a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
