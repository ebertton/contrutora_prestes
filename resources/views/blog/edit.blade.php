@extends('layout.app', ['active'=>'blog','titlePage'=>'blog'])
@section('content')
    <div class='container'>

        <div class='row'>
            <div class='col-sm-6'>
                <h2 class='mb-5'><i class="fa-solid fa-newspaper"></i> Blog</h2>
            </div>

        </div>
    </div>
    <form method="POST" action="{{ route('blogs.update', ['blog' => 1]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mt-3">
            <div class='col-sm-12'>
                <label for='path_banner'><img width='100%' class='btn'
                                              src='{{ isset($blog->url_banner) ? $blog->url_banner : "https://placehold.co/1900x1080" }}' alt="banner destaque do blog"></label>
                <input type='file'  name='path_banner' id='path_banner' class='form-control opacity-0'>
                @error('path_banner')
                <span class="text-danger"><small>{{ $message }}</small></span>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class='col-sm-12'>
                <label for='titulo'>Título</label>
                <input required type="text"  placeholder="Informe o título" class="form-control p-3  mt-3"
                       name="titulo" id='titulo' value="{{ isset($blog->titulo) ? $blog->titulo : '' }}">
                @error('titulo')
                <span class="text-danger"><small>{{ $message }}</small></span>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class='col-sm-12'>
                <label for='descricao'>Descrição</label>
                <textarea placeholder="Insira a descrição" name="descricao" id="descricao" cols="10" rows="3"
                          class="form-control p-3  mt-3">{{ isset( $blog->descricao) ? $blog->descricao : ''}}</textarea>
                @error('descricao')
                <span class="text-danger"><small>{{ $message }}</small></span>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class='col-sm-12'>
                <label for='breve_descricao'>Breve descrição</label>
                <input required type="text"  placeholder="Informe uma breve descrição"
                       class="form-control p-3  mt-3" name="breve_descricao" id='breve_descricao' maxlength="180" value="{{ isset($blog->breve_descricao) ? $blog->breve_descricao : '' }}">
            </div>
            @error('breve_descricao')
            <span class="text-danger"><small>{{ $message }}</small></span>
            @enderror
        </div>

        <div class="row">
            <div class='col-6 my-4 d-flex flex-row-reverse'>
                <button type='button' data-bs-dismiss="modal" aria-label="Close"
                        class="btn btn-secondary form-control px-5 py-2 fw-bold fs-5">Cancelar
                </button>
            </div>
            <div class='col-6 my-4 d-flex flex-row-reverse'>
                <button type="submit" class="btn btn-success form-control px-5 py-2 fw-bold fs-5">Salvar</button>
            </div>
        </div>

    </form>
@endsection
