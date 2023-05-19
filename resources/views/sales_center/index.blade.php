@extends('layout.app', ['active'=>'sales-center','titlePage'=>'Central de vendas'])
@section('content')


<div class='container'>

    <div class='row'>
        <div class='col-sm-6'>
            <h2 class='mb-5'> <i class='fa fa-comment-dollar'></i> Central de vendas</h2>
        </div>
        <div class='col-sm-6' align='right'>
            <button class='btn btn-primary px-5' onclick='$("#create-sales-center").modal("show")'> <i class='fa fa-plus'></i> &nbsp; Novo</button>
        </div>
    </div>
</div>

@if(session('city_error')) <small class='text-danger'> Cadastre a cidade primeiro! </small>@endif
<div class="table-responsive">
    <table class="table datatable" id='tableMessage' data-orderer='1'>
        <thead>
                <th>Endereço</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($salesCenter as $saleCenter)
                <tr>
                    <td> {{ $saleCenter->street . ' ' . $saleCenter->number . ', ' . $saleCenter->zip_code . ', ' . $saleCenter->city . ' - ' . $saleCenter->state}} </td>
                    <td>{{$saleCenter->mail}}</td>
                    <td>{{$saleCenter->phone}}</td>
                    <td>
                        <div class='row'>
                            <div class='col-sm-6 p-0 m-0'>
                                <i onclick='editSalesCenter({{json_encode($saleCenter)}})' class='fa fa-pen-to-square text-success button'></i>
                            </div>
                            <div class='col-sm-6 p-0 m-0'>
                                <form method='POST' id='form-delete-{{$saleCenter->id}}' action='sales-center/{{$saleCenter->id}}'>
                                    @csrf
                                    @method('DELETE')
                                    <i onclick='deleteConfirm("form-delete-{{$saleCenter->id}}")' class='fa fa-trash text-danger button'></i>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('sales_center.form-create')
@include('sales_center.form-edit')
@endsection
