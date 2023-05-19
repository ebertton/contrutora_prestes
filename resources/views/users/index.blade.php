@extends('layout.app', ['active'=>'users','titlePage'=>'Usuários do painel'])
@section('content')

    <div class="">

        <div class='row'>
            <div class='col-sm-6'>
                <h2 class='mb-5'> <i class='fa fa-users'></i> Usuários do painel</h2>
            </div>
            <div class='col-sm-6' align='right'>
                <button class='btn btn-primary px-5' onclick='$("#createUser").modal("show")'> <i class='fa fa-plus'></i> &nbsp; Novo</button>
            </div>
        
        </div>

        <div class="table-responsive">
            
            <table class='table datatable' data-orderer='0'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Whatsapp</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->whatsapp}}</td>
                            <td>
                                <div class='row'>
                                    <div class='col-sm-6 p-0 m-0'>
                                        <i onclick='editUser({{json_encode($user)}})' class='fa fa-pen-to-square text-success button'></i>
                                    </div>
                                    <div class='col-sm-6 p-0 m-0'>
                                        <form method='POST' id='form-delete-{{$user->id}}' action='users/{{$user->id}}'>
                                            @csrf
                                            @method('DELETE')
                                            <i class='fa fa-trash text-danger button' onclick='deleteConfirm("form-delete-{{$user->id}}")'></i>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    
                    </tbody>
            </table>
        </div>
    </div>

@include('users.form-create-user')
@include('users.form-edit-user')
    
@endsection
