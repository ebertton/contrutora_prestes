@extends('layout.app', ['active'=>'about','titlePage'=>'Sobre'])
@section('content')




    <h2 class='mb-3'> <i class='fa fa-building'></i> Gerir conteúdo da página <span class='text-success'>Sobre<span></h2>
    <form action='/admin/about/update' method='POST' enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div id='about-prestes' class='about-section'>
            <h4 class='section-title'> Sobre a Prestes</h4>
            <label for='about_video'> Vídeo da página Sobre (apenas o ID do video no youtube)</label>
            <input required type='text' id='about_video' name='about_video' value='{{$about->about_video}}' class='form-control mb-3' placeholder='Url do vídeo'>
            <div align='center'><iframe width='100%' height='500px' id='video_preview' src='https://youtube.com/embed/{{$about->about_video}}'></iframe></div>


            <div class='row mt-5'>
                <label for='your_home'> <h4>Prestes, seu lar do coração </h4></label>
                <div class='col-sm-6'>

                    <label for='your_home_image'><img width='100%' class='btn' id='your_home_preview' src='{{$about->your_home_image}}'></label>
                    <input type='file' name='your_home_image' id='your_home_image' class='form-control opacity-0'>
                </div>
                <div class='col-sm-6'>
                    <textarea id='your_home' name='your_home' rows='15' class='form-control mb-3' placeholder=''>{{$about->your_home}}</textarea>
                </div>
            </div>


            <div class='row'>
                <div class='col-sm-4'>
                    <label for='mission'> Missão</label>
                    <textarea class='form-control' placeholder=''  id='mission' name='mission'>{{$about->mission}}</textarea>

                </div>
                <div class='col-sm-4'>
                    <label for='vision'> Visão</label>
                    <textarea class='form-control' placeholder=''  id='vision' name='vision'>{{$about->vision}}</textarea>

                </div>
                <div class='col-sm-4'>
                    <label for='values'> Valores</label>
                    <textarea class='form-control' placeholder=''  id='values' name='values'>{{$about->values}}</textarea>

                </div>
            </div>

            <label class='mt-3' for='history'>História</label>
            <textarea id='history' name='history' class='form-control  mb-3' placeholder=''>{{$about->history}}</textarea>

            <label for='enterprises'>Nossos empreendimentos</label>
            <textarea id='our_enterprises' name='our_enterprises' class='form-control mb-3' placeholder='Texto a ser exibido'>{{$about->our_enterprises}}</textarea>
        </div>

        <div class='about-products'>
            <h4 class='section-title'> Sobre os Produtos</h4>
            <div class='row'>
                <div class='col-sm-4'>
                    <label for='cities'>Cidades</label>
                    <input required class='form-control' value='{{$about->cities}}' type='number' id='cities' name='cities'>
                </div>
                <div class='col-sm-4'>
                    <label for='enterprises_delivered'>Empreendimentos</label>
                    <input required class='form-control' value='{{$about->enterprises_delivered}}' type='number' id='enterprises_delivered' name='enterprises_delivered'>
                </div>
                <div class='col-sm-4'>
                    <label for='housing_units'>Unidades habitacionais</label>
                    <input required class='form-control' value='{{$about->housing_units}}' type='number' id='housing_units' name='housing_units'>
                </div>
                <div class='col-sm-6'>
                    <label for='direct_collaborators'>Colaboradores diretos</label>
                    <input required class='form-control' value='{{$about->direct_collaborators}}' type='number' id='direct_collaborators' name='direct_collaborators'>
                </div>
                <div class='col-sm-6'>
                    <label for='undirect_collaborators'>Colaboradores indiretos</label>
                    <input required class='form-control' value='{{$about->undirect_collaborators}}' type='number' id='undirect_collaborators' name='undirect_collaborators'>
                </div>
            </div>
        </div>


        <div id='aboute-life-institute' class='  about-section'>
            <h4 class='section-title'> Sobre o instituto vida</h4>
            <label for='life_institute'>Instituto vida</label>
            <textarea id='life_institute' name='life_institute' class='form-control mb-3' placeholder='Texto a ser exibido'>{{$about->life_institute_text}}</textarea>

            <div class='row'>
                <label>Imagens do instituto vida</label>
                <div class='col-sm-6'>

                    <label for='life_institute_image_1'><img width='100%' class='btn' id='life_institute_preview_1' src='{{$about->life_institute_image_1}}'></label>
                    <input type='file' name='life_institute_image_1' id='life_institute_image_1' class='form-control opacity-0'>
                </div>
                <div class='col-sm-6'>
                    <label for='life_institute_image_2'><img width='100%' class='btn' id='life_institute_preview_2' src='{{$about->life_institute_image_2  }}'></label>
                    <input type='file' name='life_institute_image_2' id='life_institute_image_2' class='form-control opacity-0'>
                </div>
            </div>
        </div>


        <div id='about-ceo' class=' about-section'>
            <h4 class='section-title'> Sobre o CEO</h4>
            <div class='row d-flex justify-content-center'>

                <div class='col-sm-3' align='center'>
                    <label for='ceo_image'>Imagem do CEO
                    <img src='{{$about->ceo_image}}' id='ceo_preview' width='100%' class='btn'></label>
                    <input type='file' name='ceo_image' id='ceo_image' class='form-control opacity-0'>
                </div>

            </div>
            <div class='row d-flex justify-content-center'>
            <div class='col-sm-6'>
                <label for='ceo'>Nome do CEO</label>
                <input required type='text' id='ceo' name='ceo' class='form-control mb-3' value='{{$about->ceo_name}}' placeholder=''>
            </div>
        </div>

            <div class='row'>
                <div class='col-sm-6'>
                    <label for='ceo_history'>História do CEO</label>
                    <textarea type='text' id='ceo_history' name='ceo_history' class='form-control mb-3' placeholder=''> {{$about->ceo_history}} </textarea>
                </div>
                <div class='col-sm-6'>
                    <label for='ceo_quote'>Citação do CEO</label>
                    <textarea name='ceo_quote' id='ceo_quote' class='form-control'>{{$about->ceo_quote}}</textarea>
                </div>
            </div>
            <div class='row'>
                <div class='col-sm-6'>
                    <label for='differentials_title_1'>Diferenciais título 1</label>
                    <textarea type='text' id='ceo_history' name='differentials_title_1' class='form-control mb-3' placeholder=''> {{$about->differentials_title_1}} </textarea>
                </div>
                <div class='col-sm-6'>
                    <label for='differentials_details_1'>Diferenciais detalhes 1</label>
                    <textarea name='differentials_details_1' id='differentials_details_1' class='form-control'>{{$about->differentials_details_1}}</textarea>
                </div>
            </div>

            <div class='row'>
                <div class='col-sm-6'>
                    <label for='differentials_title_1'>Diferenciais título 1</label>
                    <textarea type='text' id='ceo_history' name='differentials_title_1' class='form-control mb-3' placeholder=''> {{$about->differentials_title_1}} </textarea>
                </div>
                <div class='col-sm-6'>
                    <label for='differentials_details_1'>Diferenciais detalhes 1</label>
                    <textarea name='differentials_details_1' id='differentials_details_1' class='form-control'>{{$about->differentials_details_1}}</textarea>
                </div>
            </div>

            <div class='row'>
                <div class='col-sm-6'>
                    <label for='differentials_title_1'>Diferenciais título 1</label>
                    <textarea type='text' id='ceo_history' name='differentials_title_1' class='form-control mb-3' placeholder=''> {{$about->differentials_title_1}} </textarea>
                </div>
                <div class='col-sm-6'>
                    <label for='differentials_details_1'>Diferenciais detalhes 1</label>
                    <textarea name='differentials_details_1' id='differentials_details_1' class='form-control'>{{$about->differentials_details_1}}</textarea>
                </div>
            </div>

        </div>

        <div align='right'>
            <button type='submit' class='btn btn-success px-5 py-2'><i class='fa fa-earth-americas'></i> &nbsp; Publicar</button>
        </div>
    </form>


@endsection
