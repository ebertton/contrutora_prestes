@extends('layout.app', ['active'=>'achievements','titlePage'=>'Conquistas'])
@section('content')


<div class='container'>

    <div class='row'>
        <div class='col-sm-6'>
            <h2 class='mb-5'> <i class='fa fa-ranking-star'></i> Conquistas</h2>
        </div>
        <div class='col-sm-6' align='right'>
            <button class='btn btn-primary px-5' onclick='$("#createAchievement").modal("show")'> <i class='fa fa-plus'></i> &nbsp; Novo</button>
        </div>
    
    </div>
</div>


<div class="table-responsive">
    <table class="table datatable" id='tableMessage' data-orderer='0'>
        <thead>
                <th>Ano</th>
                <th>Conquista</th>
                <th>Ações</th>
               
        </thead>
        <tbody>
            @foreach($achievements as $achievement)
            <tr>
                <td>{{$achievement->year}}</td>
                <td>{{$achievement->achievement}}</td>
                <td>
                    <div class='row'>
                        <div class='col-sm-6 p-0 m-0'>
                          <i onclick='editAchievement({{json_encode($achievement)}})' class='fa fa-pen-to-square text-success button'></i>
                        </div>
                        <div class='col-sm-6 p-0 m-0'>
                            <form method='POST' id='form-delete-{{$achievement->id}}' action='achievements/{{$achievement->id}}'>
                                @csrf
                                @method('DELETE')
                                  <i class='fa fa-trash text-danger button' onclick='deleteConfirm("form-delete-{{$achievement->id}}")'></i>
                            </form>
                        </div>
                    </div>
                    
                    
                </td>
            </tr>
            @endforeach
            
        </tbody>


    </table>
</div>

@include('achievements.form-create')
@include('achievements.form-edit')
@endsection