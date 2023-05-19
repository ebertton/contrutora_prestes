@extends('layout.app', ['active'=>'enterprises','titlePage'=>'Banners'])
@section('content')

    <div class='container'>
        <div>
            <table class="table" data-orderer='0'>
                <thead>
                <th>Ordem</th>
                <th>Nome</th>
                <th>Ações</th>
                </thead>
                <tbody>
                @foreach($enterprises as $enterprise)
                <tr>
                    <td class="col-1">{{$enterprise->order}}</td>
                    <td class="col-10">{{$enterprise->name}}</td>
                    <td class="col-1">
                        <div class='row'>
                            <div class='col-sm-12 d-flex flex-row justify-content-start'>
                                <div class="p-2">
                                    <a href="#"  onclick='$("#orderBanner").modal("show"); selectEnterprise({{ $enterprise->id }}, "{{ $enterprise->name }}", {{ $enterprise->order !== null ? $enterprise->order : null}})'><i class="fa-regular fa-images"></i></a>
                                </div>
                                <div class="p-2">
                                    <form method='POST' id='form-remove-{{$enterprise->id}}'
                                          action='/admin/enterprises/featured-banners/{{$enterprise->id}}/remove'>
                                        @csrf
                                        <i class='fa fa-trash text-danger button'
                                           onclick='deleteConfirm("form-remove-{{$enterprise->id}}")'></i>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
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
