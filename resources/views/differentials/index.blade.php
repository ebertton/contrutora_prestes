@extends('layout.app', ['active'=>'differentials','titlePage'=>'Diferenciais'])
@section('content')


<div class='container'>

    <div class='row'>
        <div class='col-sm-6'>
            <h2 class='mb-5'> <i class='fa fa-flag'></i> Diferenciais</h2>
        </div>
        <div class='col-sm-6' align='right'>
            <button class='btn btn-primary px-5' onclick='$("#createDifferential").modal("show")'> <i class='fa fa-plus'></i> &nbsp; Novo</button>
        </div>
    
    </div>
</div>


<div class="table-responsive">
    <table class="table datatable" id='tableMessage' data-orderer='1'>
        <thead>
                <th>Icone</th>
                <th>Titulo</th>
                <th>Diferecial</th>
                <th>Ações</th>
               
        </thead>

        <tbody>

            @foreach ($differentials as $differential) 
            
                <tr>
                    <td><img src="{{$differential->icon}}" width='30px' height='30px'> </td>
                    <td>{{$differential->title}}</td>
                    <td>{{$differential->differential}}</td>
                    <td>
                        <div class='row'>
                            <div class='col-sm-6'>
                               <i onclick='editDifferential({{json_encode($differential)}})' class='button fa fa-pen-to-square  text-success'></i>
                            </div>
                            <div class='col-sm-6'>
                                <form method='POST' id='form-delete-{{$differential->id}}' action='differentials/{{$differential->id}}'>
                                    @csrf
                                    @method('DELETE')
                                    <i onclick='deleteConfirm("form-delete-{{$differential->id}}")' class='button fa fa-trash text-danger'></i>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            
            @endforeach
           
        </tbody>


    </table>
</div>

@include('differentials.form-create')
@include('differentials.form-edit')
@endsection