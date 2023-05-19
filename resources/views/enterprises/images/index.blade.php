@extends('layout.app', ['active'=>'enterprises','titlePage'=>'Empreendimentos | Imagens'])
@section('content')



<div class='container'>
    <div class='mb-3' align='right'><a href='/admin/enterprises/{{$enterpriseId}}/edit' class='btn btn-secondary'> <i class='fa fa-arrow-left'></i> Empreendimento</a></div>
    <div class='row'>
        <div class='col-sm-6'>
            <h2 class='mb-5'> <i class='fa fa-image'></i> Imagens</h2>
        </div>
        <div class='col-sm-6' align='right'>
            <button class='btn btn-primary px-5' onclick='$("#createImage").modal("show")'> <i class='fa fa-plus'></i> &nbsp; Novo</button>
        </div>
    
    </div>
</div>


<div class="table-responsive">
    <table class="table datatable" id='tableMessage' data-orderer='0'>
        <thead>
                <th>Imagem</th>
                <th>Tipo de imagem</th>
                <th>Ações</th>
               
        </thead>
        <tbody>
           @foreach ($images as $image)
               <tr>
                <td> <img src='{{$image->image}}' width='200px'> </td>
                <td> {{$image->typeName()}}</td>
                <td>
                    <div class='row'>
                        <div class='col-sm-6 p-0 m-0'>
                          <i onclick='editImage({{json_encode($image)}})' class='fa fa-pen-to-square text-success button'></i>
                        </div>
                        <div class='col-sm-6 p-0 m-0'>
                            <form method='POST' id='form-delete-{{$image->id}}' action='images/{{$image->id}}'>
                                @csrf
                                @method('DELETE')
                                  <i class='fa fa-trash text-danger button' onclick='deleteConfirm("form-delete-{{$image->id}}")'></i>
                            </form>
                        </div>
                    </div>
                    
                    
                </td>
               </tr>
           @endforeach
            
        </tbody>


    </table>
</div>

@include('enterprises.images.form-create')
@include('enterprises.images.form-edit')
@endsection