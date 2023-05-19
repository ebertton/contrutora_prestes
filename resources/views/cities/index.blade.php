@extends('layout.app', ['active'=>'cities','titlePage'=>'Cidades'])
@section('content')


<div class='container'>

    <div class='row'>
        <div class='col-sm-6'>
            <h2 class='mb-5'> <i class='fa fa-city'></i> Cidades</h2>
        </div>
        <div class='col-sm-6' align='right'>
            <button class='btn btn-primary px-5' onclick='$("#createCity").modal("show")'> <i class='fa fa-plus'></i> &nbsp; Novo</button>
        </div>
    
    </div>
</div>


<div class="table-responsive">
    <table class="table datatable" id='tableMessage' data-orderer='0'>
        <thead>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
               
        </thead>
        <tbody>
           @foreach ($cities as $city)
            <tr>
                <td>{{ $city->city_name}}</td>
                <td>{{ $city->city_describe}}</td>
                <td>
                    <div class='row'>
                        <div class='col-sm-6 p-0 m-0'>
                          <i onclick='editCity({{json_encode($city)}})' class='fa fa-pen-to-square text-success button'></i>
                        </div>
                        <div class='col-sm-6 p-0 m-0'>
                            <form method='POST' id='form-delete-{{$city->id}}' action='cities/{{$city->id}}'>
                                @csrf
                                @method('DELETE')
                                  <i class='fa fa-trash text-danger button' onclick='deleteConfirm("form-delete-{{$city->id}}")'></i>
                            </form>
                        </div>
                    </div>
                    
                    
                </td>
            </tr>
            @endforeach
        
        </tbody>


    </table>
</div>

@include('cities.form-create')
@include('cities.form-edit')
@endsection