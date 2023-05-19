@extends('layout.app', ['active'=>'referrals','titlePage'=>'Indique e ganhe'])
@section('content')



    <h2 class='mb-5'> <i class='fa fa-arrows-turn-to-dots'></i> Gerir conteúdo das <span class='text-success'>Indicações<span></h2>
        

    <form method='post' enctype="multipart/form-data" action='/admin/referrals/update' >
        <div class='row d-flex justify-content-center'>
            
            @method('PUT')
            @csrf

            <div class='col-sm-6 my-3'>
                <label for='referral_image'>Imagem<img width='100%' id='image_preview' src='{{$referrals->referral_image}}'></label>
                <input type='file' id='referral_image' class='form-control' name='referral_image'>
            </div>

            <div class='col-sm-12 my-3'>
                <label for='referral_text'>Texto</label>
                <textarea type='text' id='referral_text' class='form-control' name='referral_text'>{{$referrals->referral_text}}</textarea>
            </div>

            <div class='col-sm-12 my-3'>
                <label for='referral_url'>Url para indicar</label>
                <input required type='text' id='referral_url' value='{{$referrals->referral_url}}' class='form-control' name='referral_url'>
            </div>

            <div align='right'><button type='submit' class='btn btn-success'><i class='fa fa-earth-americas'></i> &nbsp; Publicar</button></div>
            
        </div>
    </form>

@endsection