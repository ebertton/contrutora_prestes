<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/dataTables.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="icon" type="imagem/png" href="{{asset('img/logo-old.png')}}" />

        <title>Prestes | Painel</title>
    </head>
    <body class='bg-light'>
        <div class="d-flex menu" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-dark p-5 sidebar" id="sidebar-wrapper">
                <a  class="d-flex align-items-center mt-1 mb-4 me-md-auto link-dark text-decoration-none">
                    <img src="{{asset('img/logo.png')}}" width="180px" alt="EZTEC"
                        class=" img-responsive">
                </a>
                <div class="list-group list-group-flush">
                    <ul class="nav nav-pills flex-column mb-auto ">

                        <li class="mt-4">
                            <small class="text-secondary">GERIR CONTEÚDO</small>
                        </li>
                        <li class="nav-item {{$active == 'home' ? 'border-end border-3 border-success' : ''}}">
                            <a href="/admin/home" class="btn btn-dark sidebar-button justify-content-left col-12 text-white"
                            aria-current="page">
                                <i class='fa fa-home m-0'></i> &nbsp; Home
                            </a>
                        </li>

                        <li class="nav-item {{$active == 'about' ? 'border-end border-3 border-success' : ''}}">
                            <a href="/admin/about" class="btn btn-dark sidebar-button  justify-content-left col-12 text-white"
                            aria-current="page">
                            <i class='fa fa-building m-0'></i> &nbsp; Sobre a Prestes
                            </a>
                        </li>
                        <li class="nav-item {{$active == 'referrals' ? 'border-end border-3 border-success' : ''}}">
                            <a href="/admin/referrals" class="btn btn-dark sidebar-button  justify-content-left col-12 text-white"
                            aria-current="page">
                            <i class='fa fa-arrows-turn-to-dots m-0'></i> &nbsp; Indique e ganhe
                            </a>
                        </li>



                        <li class='mt-3'>
                            <small class="text-secondary">GERENCIAR</small>
                        </li>

                        <li class=" nav-item {{$active == 'achievements' ? 'border-end border-3 border-success' : ''}}">
                            <a href="/admin/achievements" class="btn btn-dark sidebar-button justify-content-left col-12 text-white"
                            aria-current="page">
                            <i class='fa fa-ranking-star m-0'></i> &nbsp; Conquistas
                            </a>
                        </li>

                        <li class=" nav-item {{$active == 'differentials' ? 'border-end border-3 border-success' : ''}}">
                            <a href="/admin/differentials" class="btn btn-dark sidebar-button justify-content-left col-12 text-white"
                            aria-current="page">
                            <i class='fa fa-flag m-0'></i> &nbsp; Diferenciais
                            </a>
                        </li>

                        <li class=" nav-item {{$active == 'sales-center' ? 'border-end border-3 border-success' : ''}}">
                            <a href="/admin/sales-center" class="btn btn-dark sidebar-button justify-content-left col-12 text-white"
                            aria-current="page">
                            <i class='fa fa-comment-dollar m-0'></i> &nbsp; Centrais de vendas
                            </a>
                        </li>

                        <li class="nav-item {{$active == 'enterprises' ? 'border-end border-3 border-success' : ''}}">
                            <a href="/admin/enterprises" class="btn btn-dark sidebar-button justify-content-left col-12 text-white"
                            aria-current="page">
                            <i class='fa fa-house-flag m-0'></i> &nbsp; Empreendimentos
                            </a>
                        </li>

                        <li class="nav-item {{$active == 'banners' ? 'border-end border-3 border-success' : ''}}">
                            <a href="{{route('banners.index')}}" class="btn btn-dark sidebar-button justify-content-left col-12 text-white"
                               aria-current="page">
                                <i class='fa-regular fa-images m-0'></i> &nbsp; Banners
                            </a>
                        </li>

                        <li class="nav-item {{$active == 'cities' ? 'border-end border-3 border-success' : ''}}">
                            <a href="/admin/cities" class="btn btn-dark sidebar-button justify-content-left col-12 text-white"
                            aria-current="page">
                            <i class='fa fa-city m-0'></i> &nbsp; Cidades
                            </a>
                        </li>

                        <li class="nav-item {{$active == 'contact' ? 'border-end border-3 border-success' : ''}}">
                            <a href="/admin/contact" class="btn btn-dark sidebar-button  justify-content-left col-12 text-white"
                            aria-current="page">
                            <i class='fa fa-phone m-0'></i> &nbsp; Contato
                            </a>
                        </li>

                        <li class="nav-item {{$active == 'blog' ? 'border-end border-3 border-success' : ''}}">
                            <a href="{{ route('blogs.edit') }}" class="btn btn-dark sidebar-button  justify-content-left col-12 text-white"
                               aria-current="page">
                                <i class="fa-solid fa-newspaper"></i> &nbsp; Blog
                            </a>
                        </li>
                        <li class="nav-item {{$active == 'tags' ? 'border-end border-3 border-success' : ''}}">
                            <a href="{{ route('tags.index') }}" class="btn btn-dark sidebar-button  justify-content-left col-12 text-white"
                               aria-current="page">
                                <i class="fa-solid fa-tag"></i> &nbsp; Tags
                            </a>
                        </li>
                        <li class="nav-item {{$active == 'posts' ? 'border-end border-3 border-success' : ''}}">
                            <a href="{{ route('posts.index') }}" class="btn btn-dark sidebar-button  justify-content-left col-12 text-white"
                               aria-current="page">
                                <i class="fa-solid fa-pen"></i> &nbsp; Posts
                            </a>
                        </li>

                        <li class="nav-item {{$active == 'users' ? 'border-end border-3 border-success' : ''}}">
                            <a href="/admin/users" class="btn btn-dark sidebar-button  justify-content-left col-12 text-white"
                            aria-current="page">
                            <i class='fa fa-users m-0'></i> &nbsp; Usuários do painel
                            </a>
                        </li>
                        <li class="nav-item {{$active == 'privacy' ? 'border-end border-3 border-success' : ''}}">
                            <a href="{{route('privacy.polices')}}" class="btn btn-dark sidebar-button  justify-content-left col-12 text-white"
                               aria-current="page">
                                <i class='fa fa-file m-0'></i> &nbsp; Politica de privacidade
                            </a>
                        </li>



                    </div>


                </ul>



            </div>




            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar fixed-top custom-navbar navbar-expand-lg navbar-light bg-dark border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-dark" id="sidebarToggle"><i class='fa fa-bars'></i></button>
                        <div class="p-2 flex-grow-1 text-light bd-highlight title-page">{{ $titlePage }}</div>


                        <div id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">

                                <li class="nav-item dropdown">
                                    <a class="nav-link px-4 btn btn-dark dropdown-toggle text-light" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class='fa fa-user m-2'></i> {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/admin/logout">Logout</a>
                                        <button class="dropdown-item" href="#" onclick='$("#changePassword").modal("show")'>Alterar senha</button>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class='container content bg-light p-4'>
                    @yield('content')
                </div>
                @yield('cadastro-usuario')
            </div>
        </div>

    </body>
</html>




<script src="{{asset('js/chart.js')}}"></script>
<script src="{{asset('js/jquery-3.6.0.js')}}"></script>
<script src="{{asset('js/sweetalert2@11')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="/assets/plugins/slick-1.8.1/slick/slick.min.js"></script>
<script src="/assets/plugins/plyr-3.7.2/plyr.js"></script>
<script src="/assets/plugins/plyr-3.7.2/plyr.polyfilled.js"></script>
<script src="/assets/js/general.js"></script>
<script src="/js/ckeditor5/build/ckeditor.js"></script>

<script>


    let modelEditor;

    ClassicEditor.create(document.querySelector('.editor'), {
        forcePasteAsPlainText: true,
        pasteFromWordRemoveStyles: true,
        pasteFromWordRemoveFontStyles: true,
        removePlugins: ['Link', 'AutoLink'],
        // toolbar: {
        //     removeItems: [ 'imageInsert' ]
        // },
        //
        // plugins: [ Image, ImageResizeEditing, ImageResizeHandles ],

        ckfinder: {
            // The URL that the images are uploaded to.
            uploadUrl: "{{route('posts.ckeditor.upload', ['_token' => csrf_token() ])}}",
        },
        image: {
            toolbar: ['imageStyle:inline', 'imageStyle:wrapText', 'imageStyle:breakText', '|',
                'toggleImageCaption', 'imageTextAlternative']
        }
    })
        .catch(error => {
            console.error(error);
        }).then(editor => {
        window.editor = editor;
        modelEditor = editor;
    });
</script>

@if(session('success'))
    <script>alertSuccess()</script>
@endif
@if(session('error'))
    @if(session('error'))
        <script>alertError()</script>
    @else
        <script>alertError()</script>
    @endif
@endif

@include('layout.change-password')
