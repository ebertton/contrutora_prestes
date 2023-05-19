@extends('layout.app', ['active'=>'contact','titlePage'=>'Contato'])
@section('content')

<h2 class='mb-5'> <i class='fa fa-phone'></i> Contato</h2>


<form action='/admin/contact/update' method='POST' enctype="multipart/form-data">
        @csrf
        <div class="row mt-3">
            <div class='col-sm-12 d-flex justify-content-center align-items-center'>
                <div class="col-8 text-center">
                    <h4>Banner principal</h4>
                    <label for='path_banner'><img width='100%' class='btn'
                                                  src='{{ $contact->url_banner }}'
                                                  alt="banner destaque do blog"></label>
                    <input type='file' name='path_banner' id='path_banner' class='form-control opacity-0'>
                    @error('path_banner')
                    <span class="text-danger"><small>{{ $message }}</small></span>
                    @enderror
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-sm-12'>
                <label for='contact_video'>Video banner</label>
                <input type='text' name='contact_video' id='contact_video' class='form-control' value='{{$contact->contact_video}}'>
            </div>
            <div class='col-sm-6 mt-3'>
                <label for='title'>Titulo</label>
                <input required type='text' class='form-control' id='title_contact' name='title_contact' value='{{$contact->title_contact}}'>
            </div>
            <div class='col-sm-6 mt-3'>
                <label for='text_contact'>Texto</label>
                <input required type='text' class='form-control'id='text_contact' name='text_contact' value='{{$contact->text_contact}}'>
            </div>
            <div class='col-sm-4 mt-3'>
                <label for='phone'>Telefone</label>
                <input required type='text' class='form-control' id='phone' name='phone' value='{{$contact->phone}}'>
            </div>
            <div class='col-sm-4 mt-3'>
                <label for='email'>Email</label>
                <input required type='text' class='form-control' id='email' name='email' value='{{$contact->email}}'>
            </div>
            <div class='col-sm-4 mt-3'>
                <label for='address'>Endereço</label>
                <input required type='text' class='form-control' id='address' name='address' value='{{$contact->address}}'>
            </div>
            <div class='col-sm-6 mt-3'>
                <label for='facebook'>Facebook</label>
                <input required type='text' class='form-control' id='facebook' name='facebook' value='{{$contact->facebook}}'>
            </div>
            <div class='col-sm-6 mt-3'>
                <label for='instagram'>Instagram</label>
                <input required type='text' class='form-control' id='instagram' name='instagram' value='{{$contact->instagram}}'>
            </div>
            <div class='col-sm-6 mt-3'>
                <label for='youtube'>Youtube</label>
                <input required type='text' class='form-control' id='youtube' name='youtube' value='{{$contact->youtube}}'>
            </div>
            <div class='col-sm-6 mt-3'>
                <label for='whatsapp'>Whatsapp</label>
                <input required type='text' class='form-control' id='whatsapp' name='whatsapp' value='{{$contact->whatsapp}}'>
            </div>

            <div class='col-sm-6 mt-3'>
                <label for='titulo_principal_cards'>Título cards</label>
                <input required type='text'  maxlength="255" class='form-control'id='titulo_principal_cards' name='titulo_principal_cards' value='{{$contact->titulo_principal_cards}}'>
            </div>
            <div class='col-sm-6 mt-3'>
                <label for='texto_trabalhe_conosco'>Texto trabalhe conosco</label>
                <input required type='text'  maxlength="255" class='form-control'id='texto_trabalhe_conosco' name='texto_trabalhe_conosco' value='{{$contact->texto_trabalhe_conosco}}'>
            </div>
            <div class='col-sm-6 mt-3'>
                <label for='link_trabalhe_conosco'>Link trabalhe conosco</label>
                <input required type='text' class='form-control'id='link_trabalhe_conosco' name='link_trabalhe_conosco' value='{{$contact->link_trabalhe_conosco}}'>
            </div>
            <div class='col-sm-6 mt-3'>
                <label for='texto_nossos_terrenos'>Nossos terrenos</label>
                <input required type='text' maxlength="255" class='form-control'id='texto_nossos_terrenos' name='texto_nossos_terrenos' value='{{$contact->texto_nossos_terrenos}}'>
            </div>
            <div class='col-sm-6 mt-3'>
                <label for='link_nossos_terrenos'>Link nossos terrenos</label>
                <input required type='text'  class='form-control'id='link_nossos_terrenos' name='link_nossos_terrenos' value='{{$contact->link_nossos_terrenos}}'>
            </div>
            <div class='col-sm-6 mt-3'>
                <label for='texto_fornecedores' >Fornecedores</label>
                <input required type='text' maxlength="255" class='form-control'id='texto_fornecedores' name='texto_fornecedores' value='{{$contact->texto_fornecedores}}'>
            </div>
            <div class='col-sm-6 mt-3'>
                <label for='link_fornecedores'>Link fornecedores</label>
                <input required type='text' class='form-control'id='link_fornecedores' name='link_fornecedores' value='{{$contact->link_fornecedores}}'>
            </div>
            <div class='col-sm-6 mt-3'>
                <label for='texto_mao_obra'>Mão de Obra</label>
                <input required type='text' maxlength="255" class='form-control'id='texto_mao_obra' name='texto_mao_obra' value='{{$contact->texto_mao_obra}}'>
            </div>
            <div class='col-sm-6 mt-3'>
                <label for='link_mao_obra'>Link mão de Obra</label>
                <input required type='text' class='form-control'id='link_mao_obra' name='link_mao_obra' value='{{$contact->link_mao_obra}}'>
            </div>
            <div class='col-sm-6 mt-3'>
                <label for='texto_alo_conduta'>Alô conduta</label>
                <input required type='text' maxlength="255" class='form-control'id='texto_alo_conduta' name='texto_alo_conduta' value='{{$contact->texto_alo_conduta}}'>
            </div>
            <div class='col-sm-6 mt-3'>
                <label for='link_alo_conduta'>Link alô conduta</label>
                <input required type='text' class='form-control'id='link_alo_conduta' name='link_alo_conduta' value='{{$contact->link_alo_conduta}}'>
            </div>
            <div class='col-sm-6 mt-3'>
                <label for='texto_privacidade_dados'>Privacidade de dados</label>
                <input required type='text' maxlength="255" class='form-control'id='texto_privacidade_dados' name='texto_privacidade_dados' value='{{$contact->texto_privacidade_dados}}'>
            </div>
            <div class='col-sm-6 mt-3'>
                <label for='link_privacidade_dados'>Link privacidade de dados</label>
                <input required type='text' class='form-control'id='link_privacidade_dados' name='link_privacidade_dados' value='{{$contact->link_privacidade_dados}}'>
            </div>


            <div align='right' class='mt-3'>

                <button type='submit' class='btn btn-success px-5'>Enviar </button>
            </div>
        </div>
    </form>


@endsection
