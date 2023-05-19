@extends('layout.app', ['active'=>'enterprises','titlePage'=>'Empreendimentos | Editar'])
@section('content')

    <div class='container'>


        <div class='row'>
            <div class='col-sm-6'>
                <h2 class='mb-5'><i class='fa fa-house-flag'></i> Editar {{ $enterprise->name}}</h2>
            </div>
            <div class='col-sm-6' align='right'>
                <a class='btn btn-secondary px-5' href='/admin/enterprises'> <i class='fa fa-arrow-left'></i> &nbsp;
                    Empreendimentos</a>
            </div>

        </div>

        <div class='row  mb-5'>
            <div class='col-sm-3'>
                <a href='/admin/enterprises/{{$enterprise->id}}/apartments'
                     class='btn btn-success border form-control'><i class='fa fa-bed'></i> Apartamentos
                </a>
            </div>

            <div class='col-sm-3'>
                <a href='/admin/enterprises/{{$enterprise->id}}/lands'
                     class='btn btn-success border form-control'><i class='fa fa-vector-square'></i> Terrenos
                </a>
            </div>

            <div class='col-sm-3'>
                <a href='/admin/enterprises/{{$enterprise->id}}/images'
                        class='btn btn-success border form-control'><i class='fa fa-image'></i> Imagens
                </a>
            </div>

            <div class='col-sm-3'>
                <a href='/admin/enterprises/{{$enterprise->id}}/status'
                    class='btn btn-success border form-control'><i class='fa fa-arrow-right'></i> Status
                </a>
            </div>


        </div>


        <div class='row d-flex'>
            <div class='col-sm-6 mt-3'>
                <label for='benefit'>Vantagens</label>
                <form method='post' action='/admin/benefits'>
                    <div class='row mt-2'>
                        @csrf
                        <input type='hidden' id='enterprise_id' name='enterprise_id' value='{{$enterprise->id}}'>
                        <div class='col-sm-3'>
                            <input class='form-control' id='key' name='key' type="text" placeholder='Key'>
                        </div>
                        <div class='col-sm-6'>
                            <input class='form-control' id='benefit' name='benefit' type="text" placeholder='Vantagem'>
                        </div>
                        <div class='col-sm-3'>
                            <button type='submit' id='addBenefit' class='btn btn-success'>Incluir</button>
                        </div>

                    </div>
                </form>

                <div class='row container' id='list-benefits' style='overflow-y: scroll; height: 400px'>
                    <table id='list-benefits'>
                        @foreach ($enterprise->benefit as $benefit)
                            <tr>
                                <td>
                                    <button class='btn-success btn'
                                            style='border-radius: 90px'>{{$benefit->key}}</button>
                                </td>
                                <td>{{$benefit->text}}</td>
                                <td class='p-3'>
                                    <div class='row'>


                                        <div class='col-sm-4'>
                                            <form method='POST' id='form-delete-{{$benefit->id}}'
                                                  action='/admin/benefits/{{$benefit->id}}'>
                                                @csrf
                                                @method('DELETE')
                                                <i class='fa fa-trash text-danger button'
                                                   onclick='deleteConfirm("form-delete-{{$benefit->id}}")'></i>
                                            </form>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class='col-sm-6 mt-3'>
                <label for='benefits'>Imagem das vantagens
                    <img src='{{$enterprise->benefits_image}}' style='cursor: pointer' class='mt-2' width='100%'
                         id='image_benefits_preview'></label>

            </div>
        </div>
        <form method='POST' action='/admin/enterprises/{{$enterprise->id}}' enctype="multipart/form-data">
        <input type='file' name='benefits' id='benefits' class='form-control d-none'>
            @csrf
            @method('PUT')
            <div class='row'>
                <h4>Informações gerais</h4>

                <div class='col-sm-12 mt-3'>
                    <label for='name'>Nome</label>
                    <input required type='text' name='name' id='name' value='{{$enterprise->name}}'
                           class='form-control'>
                </div>
                <div class='col-sm-12 mt-3'>
                    <label for='name'>Titulo de apresentação</label>
                    <input required type='text' name='describe_title' value='{{$enterprise->describe_title}}'
                           id='describe_title' class='form-control'>
                </div>
                <div class='col-sm-12 mt-3'>
                    <label for='name'>Descrição</label>
                    <textarea type='text' name='describe' id='describe'
                              class='form-control'>{{$enterprise->describe}}</textarea>
                </div>
                <div class='col-sm-6 mt-3'>
                    <label for='video'>Vídeo</label>
                    <input required type='text' name='video' id='video' value='{{$enterprise->video}}'
                           class='form-control'>
                </div>


                <div class='col-sm-3 mt-3'>
                    <label for='parking_spaces'>Vagas de estacionamento</label>
                    <input required type='number' name='parking_spaces' value='{{$enterprise->parking_spaces}}'
                           id='parking_spaces' class='form-control'>
                </div>
                <div class='col-sm-3 mt-4 d-flex  justify-content-center align-items-center'>
                    <input type='checkbox' @if($enterprise->concierge24h == 1) checked @endif name='concierge'
                           id='concierge' class='form-check-input'> &nbsp;
                    <label for='concierge'>Portaria 24h </label>
                </div>




                <div class='col-sm-6 mt-3'>
                    <label for='zip'> CEP</label>
                    <input required maxlength='8' type="text" class="form-control" value='{{$enterprise->zip_code}}'
                           name="zip" id='zip'>
                </div>

                <div class='col-sm-6 mt-3'>
                    <label for='street'>Rua</label>
                    <input required type="text" readonly class="form-control" name="street"
                           value='{{$enterprise->street}}' id='street'> <br>
                </div>

                <div class='col-sm-6'>
                    <label for='neighborhood'>Bairro</label>
                    <input required type="text" readonly class="form-control" value='{{$enterprise->neighborhood}}'
                           name="neighborhood" id='neighborhood'>
                </div>

                <div class='col-sm-4'>
                    <label for='city'>Cidade</label>
                    <input required type="text" readonly class="form-control" name="city"
                           value='{{$enterprise->cities->city_name}}' id='city'> <br>
                    @if(session('error'))
                        <small class='text-danger'> Cadastre a cidade primeiro! </small>
                    @endif
                </div>

                <div class='col-sm-2'>
                    <label for='state'>Estado</label>
                    <input required type="text" readonly class="form-control" name="state"
                           value='{{$enterprise->state}}' id='state'>
                </div>

                <div class='col-sm-6'>
                    <label for='complement'>Complemento</label>
                    <input type="text" class="form-control" name="complement" id='complement'
                           value='{{$enterprise->complement}}'> <br>
                </div>

                <div class='col-sm-6'>
                    <label for='number'>Número</label>
                    <input required type="text" class="form-control" name="number" id='number'
                           value='{{$enterprise->number}}'>
                </div>
                <div class='col-sm-12'>
                    <label for='number'>Texto localização privilegiada</label>
                    <textarea type="text" class="form-control" name="prime_location"
                              id='prime_location'>{{$enterprise->prime_location_text}}</textarea>
                </div>

                <div class='col-sm-12 mt-3'>
                    <input type='checkbox' name='public' @if($enterprise->public == 1) checked @endif id='public' class='form-checkbox mx-3'><label for='public'  > Público</label>
                </div>


            </div>
            <div class='col-sm-12'>
                <label for='tour_360_link'>Tour 360</label>
                <input type='text' name='tour_360_link' id='tour_360_link' class='form-control' value="{{$enterprise->tour_360_link}}">
            </div>

            <div align='right'>

                <div class='col-sm-3 mt-4'>
                    <button type='submit' class='btn btn-success mt-3 form-control'> Enviar</button>
                </div>
            </div>
        </form>
    </div>

@endsection
