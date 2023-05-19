@extends('layout.app', ['active'=>'home','titlePage'=>'Home'])
@section('content')



    <h2 class='mb-5'> <i class='fa fa-home'></i> Gerir conteúdo da <span class='text-success'>Home<span></h2>
        

    <form method='post'  action='/admin/home/update' >
        <div class='form-group'>
            @method('PUT')
            @csrf
            <label for='we_are_prestes'> Prazer nós somos a Prestes</label>
            <textarea id='we_are_prestes' name='we_are_prestes' class='form-control mb-3' placeholder='Texto a ser exibido'>{{ $home->we_are_prestes}}</textarea> 

            <label for='home_video'> Vídeo da home</label>
            <input required type='text' id='home_video' name='home_video' value='{{$home->home_video}}' class='form-control mb-3' placeholder='Url do vídeo'> 
            <div align='center'><iframe width='100%' height='500px' id='video_preview' src='https://youtube.com/embed/{{$home->home_video}}'></iframe></div>
            <div align='right'>
                <button type='submit' class='btn btn-success px-5 py-2'><i class='fa fa-earth-americas'></i> &nbsp; Publicar</button>
            </div>
        </div>
    </form>

@endsection