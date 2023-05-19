<div>
    <div class="modal fade" id="createTag" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg bg-light rounded">
            <div class="modal-content bg-light rounded">
                <div class="modal-header">
                    <h1 class="col-5 fw-light mt-3 mb-3">Adicionar Tag</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('tags.store') }}" id="formTag">
                        @csrf
                        <div class="row">
                            <div class='col-sm-12'>
                                <input type="text" placeholder="Desccrição" class="form-control p-3  mt-3"
                                       name="descricao" id='descricao'>
                                @error('descricao')
                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                @enderror

                            </div>

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



