<div>
    <div class="modal fade" id="createPost" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg bg-light rounded">
            <div class="modal-content bg-light rounded">
                <div class="modal-header">
                    <h1 class="col-5 fw-light mt-3 mb-3">Adicionar Post</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('posts.store') }}" id="formPost" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class='col-sm-12'>
                                <input  type="text" placeholder="titulo" class="form-control p-3  mt-3"
                                       name="titulo" id='titulo' value="{{ old('titulo') }}">
                                @error('titulo')
                                <span class="text-danger"><small>{{ $message }}</small></span>
                                @enderror
                            </div>


                        </div>
                        <div class="row">
                            @component('components.editor')

                            @endcomponent
                        </div>
                        <div class="row">
                            <div class='col-sm-6'>
                                <select class="form-control p-3  mt-3" name="id_tags" id="id_tags">
                                    <option selected>Selecione uma tag</option>

                                    @foreach($tags as $tag)

                                        <option {{ old('id_tags') == $tag->id ? 'selected' : ''}} value="{{ $tag->id}}">{{ $tag->descricao }}</option>
                                    @endforeach
                                </select>
                                @error('id_tags')
                                <span class="text-danger"><small>{{ $message }}</small></span>
                                @enderror
                            </div>
                            <div class='col-sm-6'>
                                <input type="date" class="form-control p-3  mt-3" name="data_publicacao" id="data_publicacao" value="{{ old('data_publicacao') }}">
                                @error('data_publicacao')
                                <span class="text-danger"><small>{{ $message }}</small></span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class='col-sm-12 mt-3'>
                                <label for='city_banner'> Banner destaque
                                    <img  id='image_preview' width='100%'></label>
                                <input  class='form-control' type='file' name='path_banner' id='post_banner'>
                                @error('path_banner')
                                <span class="text-danger"><small>{{ $message }}</small></span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class='col-6 my-4 d-flex flex-row-reverse'>
                                <button type='button' data-bs-dismiss="modal" aria-label="Close"
                                        class="btn btn-secondary form-control px-5 py-2 fw-bold fs-5">Cancelar
                                </button>
                            </div>
                            <div class='col-6 my-4 d-flex flex-row-reverse'>
                                <button type="submit" class="btn btn-success form-control px-5 py-2 fw-bold fs-5">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
