@extends('layout.app', ['active'=>'tags','titlePage'=>'Posts'])
@section('content')

    <style>
        .ck-editor__editable_inline {
            min-height: 400px;
        }
    </style>
    <div class='container'>
        <div class='row'>
            <div class='col-sm-6'>
                <h2 class='mb-5'><i class="fa-solid fa-pen"></i>Posts</h2>
            </div>
            <div class='col-sm-6' align='right'>
                <button class='btn btn-primary px-5' onclick='$("#createPost").modal("show"); clearForm($("#formPost"));  removeInputMethod(); alterActionForm("/admin/posts", $("#formTag"))'><i class='fa fa-plus'></i>
                    &nbsp; Novo
                </button>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table datatable" id='tableMessage' data-orderer='1'>
            <thead>
            <th class="col-1">ID</th>
            <th class="col-4">Titulo</th>
            <th class="col-3">Data de publicação</th>
            <th class="col-3">Escrito por</th>
            <th class="col-1">Ações</th>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->titulo}}</td>
                    <td>{{$post->data_publicacao}}</td>
                    <td>{{$post->users->name}}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <div class="me-2">
                                <button class="text-success btn" onclick="editPost({{$post->id}})">
                                    <i class='fa fa-pen-to-square '></i>
                                </button>

                            </div>
                            <div>
                                <form method='POST' action="{{ route('posts.destroy', ['post' => $post->id]) }}">
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

    @component('components.post.form', ['tags' => $tags])
    @endcomponent
    <script>
        function editPost(idPost) {

            $.get("/admin/posts/" + idPost + "/edit", function (data) {
                $('#titulo').val(data.titulo);
                editor.setData(data.texto);
                $('#id_tags').find("option[value="+data.id_tags+"]").attr('selected', '');
                $('#data_publicacao').val(data.data_publicacao_defaut);
                $('#image_preview').attr('src', data.url_banner);
                $("#formPost").attr('action', "/admin/posts/" + idPost );
                $("#formPost").append('<input type="hidden" name="_method" value="PUT">');
                showModal();

            });
        }


    </script>
    <script>
        function showModal() {
            $('#createPost').modal('show');
        }
    </script>
@endsection
@section('script')

    <script>
        let modelEditor;

        ClassicEditor.create(document.querySelector('.editor'), {
            forcePasteAsPlainText: true,
            pasteFromWordRemoveStyles: true,
            pasteFromWordRemoveFontStyles: true,
            removePlugins: ['Link', 'AutoLink'],
            // toolbar: {
            //     removeItems: [ 'imageInsert' ]
            // },
            //
            // plugins: [ Image, ImageResizeEditing, ImageResizeHandles ],

            ckfinder: {
                // The URL that the images are uploaded to.
                uploadUrl: "{{route('posts.ckeditor.upload', ['_token' => csrf_token() ])}}",
            },
            image: {
                toolbar: ['imageStyle:inline', 'imageStyle:wrapText', 'imageStyle:breakText', '|',
                    'toggleImageCaption', 'imageTextAlternative']
            }
        })
            .catch(error => {
                console.error(error);
            }).then(editor => {
            window.editor = editor;
            modelEditor = editor;
        });
    </script>

    @if ($errors->any())
        <script>
            $(document).ready(function () {
                console.log('teste');
                showModal();
            });
        </script>
    @endif

@endsection
