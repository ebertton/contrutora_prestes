@extends('layout.app', ['active'=>'privacy','titlePage'=>'Politica de privacidade'])
@section('content')



    <h2 class='mb-5'> <i class='fa fa-file'></i> Gerir  <span class='text-success'>Politica de Privacidade</span></h2>


    <form method='post'  action='{{route('privacy.polices.store')}}' >
        <div class='form-group'>
            @method('PUT')
            @csrf
            <label for='we_are_prestes'>Texto</label>
            <textarea id='we_are_prestes'  name='text' class='form-control mb-3' placeholder='Texto a ser exibido'>{{$privacy->text}}
            </textarea>

            <label for='home_video'>Saiba mais</label>
            <input required type='text' name='url_privacy' value="{{$privacy->url}}" class='form-control mb-3' placeholder='Url politica de privacidade'>
            <div align='right'>
                <button type='submit' class='btn btn-success px-5 py-2'><i class='fa fa-earth-americas'></i> &nbsp; Publicar</button>
            </div>
        </div>
    </form>

@endsection
