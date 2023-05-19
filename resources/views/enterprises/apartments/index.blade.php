@extends('layout.app', ['active'=>'enterprises','titlePage'=>'Empreendimentos | Apartamentos'])
@section('content')



<div class='container'>
    <div class='mb-3' align='right'><a href='/admin/enterprises/{{$enterpriseId}}/edit' class='btn btn-secondary'> <i class='fa fa-arrow-left'></i> Empreeendimento</a></div>
    <div class='row'>
        <div class='col-sm-6'>
            <h2 class='mb-5'> <i class='fa fa-bed'></i> Apartamentos</h2>
        </div>
        <div class='col-sm-6' align='right'>
            <button class='btn btn-primary px-5' onclick='$("#createApartment").modal("show")'> <i class='fa fa-plus'></i> &nbsp; Novo</button>
        </div>
    
    </div>
</div>


<div class="table-responsive">
    <table class="table datatable" id='tableMessage' data-orderer='0'>
        <thead>
                <th>Dormitórios</th>
                <th>Suítes</th>
                <th>Metros quadrados</th>
                <th>Ações</th>
               
        </thead>
        <tbody>
           
            @foreach($apartments as $apartment) 

                <tr>
                    <td>{{$apartment->dormitories}}</td>
                    <td>{{$apartment->suites}}</td>
                    <td>{{$apartment->square_meters}}</td>
                    <td>
                        <div class='row'>
                            <div class='col-sm-6 p-0 m-0'>
                              <i onclick='editApartment({{json_encode($apartment)}})' class='fa fa-pen-to-square text-success button'></i>
                            </div>
                            <div class='col-sm-6 p-0 m-0'>
                                <form method='POST' id='form-delete-{{$apartment->id}}' action='apartments/{{$apartment->id}}'>
                                    @csrf
                                    @method('DELETE')
                                      <i class='fa fa-trash text-danger button' onclick='deleteConfirm("form-delete-{{$apartment->id}}")'></i>
                                </form>
                            </div>
                        </div>
                        
                        
                    </td>
                <tr>

            @endforeach
            
        </tbody>


    </table>
</div>

@include('enterprises.apartments.form-create')
@include('enterprises.apartments.form-edit')
@endsection