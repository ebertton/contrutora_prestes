@extends('layout.app', ['active'=>'enterprises','titlePage'=>'Empreendimentos | Apartamentos'])
@section('content')



<div class='container'>
    <div class='mb-3' align='right'><a href='/admin/enterprises/{{$enterpriseId}}/edit' class='btn btn-secondary'> <i class='fa fa-arrow-left'></i> Empreeendimento</a></div>
    <div class='row'>
        <div class='col-sm-6'>
            <h2 class='mb-5'> <i class='fa fa-vector-square'></i> Terrenos</h2>
        </div>
        <div class='col-sm-6' align='right'>
            <button class='btn btn-primary px-5' onclick='$("#createLand").modal("show")'> <i class='fa fa-plus'></i> &nbsp; Novo</button>
        </div>
    
    </div>
</div>


<div class="table-responsive">
    <table class="table datatable" id='tableMessage' data-orderer='0'>
        <thead>

                <th>Metros quadrados</th>
                <th>Ações</th>
               
        </thead>
        <tbody>
           
            @foreach ($lands as $land) 
            
                <tr>
                    <td>{{ $land->square_meters }}</td>
                    <td>
                        <div class='row'>
                            <div class='col-sm-6'>
                               <i onclick='editLand({{json_encode($land)}})' class='button fa fa-pen-to-square  text-success'></i>
                            </div>
                            <div class='col-sm-6'>
                                <form method='POST' id='form-delete-{{$land->id}}' action='lands/{{$land->id}}'>
                                    @csrf
                                    @method('DELETE')
                                    <i onclick='deleteConfirm("form-delete-{{$land->id}}")' class='button fa fa-trash text-danger'></i>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>

            @endforeach
            
        </tbody>


    </table>
</div>

@include('enterprises.lands.form-create')
@include('enterprises.lands.form-edit')
@endsection