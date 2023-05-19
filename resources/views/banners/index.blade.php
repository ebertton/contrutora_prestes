@extends('layout.app', ['active'=>'tags','titlePage'=>'Banners'])
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-sm-6'>
                <h2 class='mb-5'><i class="fa-solid fa-pen"></i>Banners</h2>
            </div>
            <div class='col-sm-6' align='right'>
                <button class='btn btn-primary px-5' onclick='$("#createBanner").modal("show"); clearForm($("#form-banner"));  removeInputMethod(); alterActionForm("/admin/posts", $("#formTag"))'><i class='fa fa-plus'></i>
                    &nbsp; Novo
                </button>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table" id='tableMessage' data-orderer='1'>
            <thead>
            <th class="col-1">Ordem</th>
            <th class="col-4">Titulo</th>
            <th class="col-1">Ações</th>
            </thead>
            <tbody>
            @foreach($banners as $banner)
                <tr>
                    <td>{{$banner->order}}</td>
                    <td>{{$banner->title}}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <div class="me-2">
                                <button class="text-success btn" onclick="editBanner({{$banner->id}})">
                                    <i class='fa fa-pen-to-square '></i>
                                </button>

                            </div>
                            <div>
                                <form method='POST' action="{{ route('banners.destroy', ['banner' => $banner->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class='text-danger btn'>
                                        <i class='fa fa-trash'></i>
                                    </button>

                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    @component('components.banners.modal-form-image-banner')
    @endcomponent

    @component('components.featured-banner')
    @endcomponent

    <script>
        function selectBanner(enterpriseId, title, order){
            $('#formOrder').attr('action', `/admin/enterprises/${enterpriseId}/featured-banner`);
            $('#nameEnterprise').val(title);
            if(order !== null && order !== undefined){
                $('.select-order').find("option[value='5']").removeAttr('selected', '');
                $('.select-order').find("option[value="+order+"]").attr('selected', '');
            }else{
                $('.select-order').find("option[selected='selected']").removeAttr('selected');
                $('.select-order').find("option[value='5']").attr('selected', '');
            }
        }



        function editBanner(idBanner) {

            $.get("/admin/banners/" + idBanner + "/edit", function (data) {
                $('#title').val(data.title);
                $('#link').val(data.link);
                $('#order').find("option[value=5]").removeAttr('selected');
                $('#order').find("option[value="+data.order+"]").attr('selected', '');
                $('#image_preview').attr('src', data.path_banner);
                $("#form-banner").attr('action', "/admin/banners/" + idBanner );
                $("#form-banner").append('<input type="hidden" name="_method" value="PUT">');
                $("#image").removeAttr('required');
                showModal();

            });
        }



        function showModal() {
            $('#createBanner').modal('show');
        }
    </script>


@endsection


