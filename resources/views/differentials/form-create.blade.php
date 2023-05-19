<div class="modal fade" id="createDifferential" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg bg-light rounded">
        <div class="modal-content bg-light rounded">
            <div class="modal-header">
                <h2 class="col-5 fw-light mt-3 mb-3">Adicionar diferencial</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class='col-sm-6'>
                            <input required type="file" placeholder="Icone" class="form-control p-3  mt-3" name="icon" id='icon'> <br>
                        </div>
                        
                        <div class='col-sm-6'>
                            <input required type="text" placeholder="Titulo" class="form-control p-3  mt-3" name="title" id='title'> <br>
                        </div>
                        
                        <div class='col-sm-12'>
                            <textarea placeholder="Texto do diferencial" name="text" id="text" cols="10" rows="3" class="form-control p-3  mt-3"></textarea>
                        </div>
                        
                        <div class='col-6 my-4 d-flex flex-row-reverse'>
                            <button type='button' data-bs-dismiss="modal" aria-label="Close"  class="btn btn-secondary form-control px-5 py-2 fw-bold fs-5">Cancelar</button>
                        </div>
                        <div class='col-6 my-4 d-flex flex-row-reverse'>
                            <button type="submit"  class="btn btn-success form-control px-5 py-2 fw-bold fs-5">Enviar</button>
                        </div>
                    </div>
                    
                </form>
            </div>

        </div>
    </div>
</div>

