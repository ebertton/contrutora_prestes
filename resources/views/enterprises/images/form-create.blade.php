<div class="modal fade" id="createImage" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg bg-light rounded">
        <div class="modal-content bg-light rounded">
            <div class="modal-header">
                <h2 class="col-5 fw-light mt-3 mb-3">Nova imagem</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row">


                        <div class='col-sm-12'>
                            <label for='floor_plan'>Imagem</label>
                            <input required name="image" id="image" type='file' class="form-control p-3  mb-3">
                        </div>

                        <div class='col-sm-12'>
                            <label>Tipo de imagem</label>
                            <div class='row mt-3'>
                                <div class='col-sm-4'>
                                    <input type='radio' value='0' name='type' id='type-0'>
                                    <label for='type-0'>Apartamento / Terreno</label>
                                </div>

                                <div class='col-sm-4'>
                                    <input type='radio' value='1' name='type' id='type-1'>
                                    <label for='type-1'>Área comum</label>
                                </div>

                                <div class='col-sm-4'>
                                    <input type='radio' value='2' name='type' id='type-2'>
                                    <label for='type-2'>Banner</label>
                                </div>
                            </div>
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

