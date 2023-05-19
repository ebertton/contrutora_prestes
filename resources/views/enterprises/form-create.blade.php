@extends('layout.app', ['active'=>'enterprises','titlePage'=>'Empreendimentos | Novo'])
@section('content')


<div class='container'>


    <div class='row'>
        <div class='col-sm-6'>
            <h2 class='mb-5'> <i class='fa fa-house-flag'></i> Novo empreendimento</h2>
        </div>
        <div class='col-sm-6' align='right'>
            <a class='btn btn-secondary px-5' href='/admin/enterprises'> <i class='fa fa-arrow-left'></i> &nbsp; Empreendimentos</a>
        </div>

    </div>
    <form method='POST' action='/admin/enterprises' enctype="multipart/form-data">
        @csrf
        <div class='row'>
            <h4>Informações gerais <i class='fa fa-circle-info text-primary' title='Você poderá adicionar apartamentos e imagens após criar o empreendimento'></i> </h4>


                <div class='col-sm-12'>
                    <label for='name'>Nome</label>
                    <input required type='text' name='name' id='name' class='form-control'>
                </div>
                <div class='col-sm-12 mt-3'>
                    <label for='name'>Titulo de apresentação</label>
                    <input required type='text' name='describe_title' id='describe_title' class='form-control'>
                </div>
                <div class='col-sm-12 mt-3'>
                    <label for='name'>Descrição</label>
                    <textarea type='text' name='describe' id='describe' class='form-control'></textarea>
                </div>
                <div class='col-sm-6 mt-3'>
                    <label for='video'>Vídeo</label>
                    <input required type='text' name='video' id='video' class='form-control'>
                </div>
                <div class='col-sm-6 mt-3'>
                    <label for='benefits'>Imagem das vantagens</label>
                    <input required type='file' name='benefits' id='benefits' class='form-control'>
                </div>

                <div class='col-sm-3 mt-3'>
                    <label for='parking_spaces'>Vagas de estacionamento</label>
                    <input required type='number' name='parking_spaces' id='parking_spaces' class='form-control'>
                </div>
            <div class='col-sm-4 mt-4 d-flex  justify-content-center align-items-center'>
                <input type='checkbox' name='concierge' id='concierge' class='form-check-input'> &nbsp;
                <label for='concierge'>Portaria 24h </label>
            </div>





                <div class='col-sm-6 mt-3'>
                    <label for='zip'> CEP</label>
                    <input required maxlength='8' type="text" class="form-control" name="zip" id='zip'>
                </div>

                <div class='col-sm-6 mt-3'>
                    <label for='street'>Rua</label>
                    <input required type="text" readonly  class="form-control" name="street" id='street'> <br>
                </div>

                <div class='col-sm-6'>
                    <label for='neighborhood'>Bairro</label>
                    <input required type="text" readonly  class="form-control" name="neighborhood" id='neighborhood'>
                </div>

                <div class='col-sm-4'>
                    <label for='city'>Cidade</label>
                    <input required type="text" readonly class="form-control" name="city" id='city'> <br>
                    @if(session('error')) <small class='text-danger'> Cadastre a cidade primeiro! </small>@endif
                </div>

                <div class='col-sm-2'>
                    <label for='state'>Estado</label>
                    <input required type="text" readonly class="form-control" name="state" id='state'>
                </div>

                <div class='col-sm-6'>
                    <label for='complement'>Complemento</label>
                    <input type="text" class="form-control" name="complement" id='complement'> <br>
                </div>

                <div class='col-sm-6'>
                    <label for='number'>Número</label>
                    <input required type="text"  class="form-control" name="number" id='number'>
                </div>

                <div class='col-sm-12'>
                    <label for='number'>Texto localização privilegiada</label>
                    <textarea type="text"  class="form-control" name="prime_location" id='prime_location'></textarea>
                </div>

                <div class='col-sm-12 mt-3'>
                    <input type='checkbox' name='public'  id='public' class='form-checkbox mx-3'><label for='public'  > Público</label>
                </div>

            <div class='col-sm-12'>
                <label for='tour_360_link'>Tour 360</label>
                <input type='text' name='tour_360_link' id='tour_360_link' class='form-control'>
            </div>


        </div>

        <div align='right'>

            <div class='col-sm-3 mt-4'>
                <button type='submit' class='btn btn-success mt-3 form-control'> Enviar </button>
            </div>
        </div>
    </form>
</div>


@endsection
