@extends('layout.app', ['active'=>'tags','titlePage'=>'Tags'])
@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col-sm-6'>
                <h2 class='mb-5'><i class="fa-solid fa-tag"></i>Tags</h2>
            </div>
            <div class='col-sm-6' align='right'>
                <button class='btn btn-primary px-5' onclick='$("#createTag").modal("show"); clearForm($("#formTag"));  removeInputMethod(); alterActionForm("/admin/tags", $("#formTag"))'><i class='fa fa-plus'></i>
                    &nbsp; Novo
                </button>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table datatable" id='tableMessage' data-orderer='1'>
            <thead>
            <th class="col-1">ID</th>
            <th class="col-10">Tag</th>
            <th class="col-1">Ações</th>
            </thead>
            <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td> {{ $tag->id }}</td>
                    <td>{{ $tag->descricao }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <div class="me-2">
                                <button class="text-success btn" onclick="editTag({{$tag->id}})">
                                    <i class='fa fa-pen-to-square '></i>
                                </button>

                            </div>
                            <div>
                                <form method='POST' action="{{ route('tags.destroy', ['tag' => $tag->id]) }}">
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

    @component('components.tag.form')
    @endcomponent
    <script>
        function editTag(idTag) {

            $.get("/admin/tags/" + idTag + "/edit", function (data) {
                $('#descricao').val(data.descricao);
                $("#formTag").attr('action', "/admin/tags/" + idTag );
                $("#formTag").append('<input type="hidden" name="_method" value="PUT">');
                showModal();

            });
        }


    </script>
    <script>
        function showModal() {
            $('#createTag').modal('show');
        }
    </script>

@endsection
@section('script')

    @if ($errors->any())
        <script>
            $(document).ready(function () {
                showModal();
            });
        </script>
    @endif


@endsection
