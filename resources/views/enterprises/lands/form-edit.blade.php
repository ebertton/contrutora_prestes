<div class="modal fade" id="editLand" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg bg-light rounded">
        <div class="modal-content bg-light rounded">
            <div class="modal-header">
                <h2 class="col-5 fw-light mt-3 mb-3">Editar terreno</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" id='form-edit-land' action="" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        
                        <div class='col-sm-12'>
                            <label for='square_meters'> Metros quadrados</label>
                            <input required step=".01" name="square_meters" id="edit-square_meters" type='number' class="form-control p-3  mt-3">
                        </div>

                        <div class='col-sm-12 mt-4'>
                            <label for='edit-floor_plan'>Planta do terreno
                                <img id='img_preview' width='100%'>
                            </label>
                            <input  name="floor_plan" id="edit-floor_plan" type='file' class="form-control p-3  mb-3">
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

