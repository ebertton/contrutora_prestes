@extends('layout.app', ['active'=>'enterprises','titlePage'=>'Empreendimentos'])
@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col-sm-6'>
                <h2 class='mb-5'><i class='fa fa-house-flag'></i> Empreendimentos</h2>
            </div>
            <div class='col-sm-6' align='right'>
                <a class='btn btn-primary px-5' href='/admin/enterprises/create'> <i class='fa fa-plus'></i> &nbsp; Novo</a>
            </div>
        </div>
    </div>


    <div class="table-responsive">
        <table class="table datatable" id='tableMessage' data-orderer='0'>
            <thead>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Ações</th>

            </thead>
            <tbody>

            @foreach ($enterprises as $enterprise)
                <tr>
                    <td>{{ $enterprise->name}}</td>
                    <td> {{ $enterprise->street . ' ' . $enterprise->number . ', ' . $enterprise->zip_code . ', ' . $enterprise->cities->city_name . ' - ' . $enterprise->state}} </td>
                    <td>
                        <div class='row'>
{{--                            <div class='col-sm-4'>--}}
{{--                                <i class='fa fa-eye text-primary button'></i>--}}
{{--                            </div>--}}

{{--                            <div class='col-sm-4'>--}}
{{--                                <a href="#"  onclick='$("#orderBanner").modal("show"); selectEnterprise({{ $enterprise->id }}, "{{ $enterprise->name }}", {{ $enterprise->order !== null ? $enterprise->order : null}})'><i class="fa-regular fa-images"></i></a>--}}
{{--                            </div>--}}

                            <div class='col-sm-4'>
                                <a href='/admin/enterprises/{{$enterprise->id}}/edit'><i
                                        class='fa fa-pen-to-square  text-success button'></i></a>
                            </div>
                            <div class='col-sm-4'>
                                <form method='POST' id='form-delete-{{$enterprise->id}}'
                                      action='enterprises/{{$enterprise->id}}'>
                                    @csrf
                                    @method('DELETE')
                                    <i class='fa fa-trash text-danger button'
                                       onclick='deleteConfirm("form-delete-{{$enterprise->id}}")'></i>
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
    @component('components.featured-banner')
    @endcomponent

    <script>
        function selectEnterprise(enterpriseId, enterpriseName, order){
            $('#formOrder').attr('action', `/admin/enterprises/${enterpriseId}/featured-banner`);
            $('#nameEnterprise').val(enterpriseName);
            if(order !== null && order !== undefined){
                $('.select-order').find("option[value='5']").removeAttr('selected', '');
                $('.select-order').find("option[value="+order+"]").attr('selected', '');
            }else{
                $('.select-order').find("option[selected='selected']").removeAttr('selected');
                $('.select-order').find("option[value='5']").attr('selected', '');
            }
        }
    </script>
@endsection
