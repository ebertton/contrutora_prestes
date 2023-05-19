<div class="modal fade" id="createCity" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg bg-light rounded">
        <div class="modal-content bg-light rounded">
            <div class="modal-header">
                <h2 class="col-5 fw-light mt-3 mb-3">Adicionar cidade</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="" enctype='multipart/form-data'>
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class='col-sm-12'>
                            <input required placeholder='Nome da cidade' class='form-control' type='text' name='city_name' id='city_name'>
                        </div>
                        <div class='col-sm-12'>
                            <textarea placeholder="Descrição da cidade" name="city_describe" id="city_describe" cols="10" rows="3" class="form-control p-3  mt-3"></textarea>
                        </div>

                        <div class='col-sm-12 mt-3'>
                            <label for='city_banner'> Banner da cidade
                            <img src='' id='image_preview' width='100%'></label>
                            <input required class='form-control' type='file' name='city_banner' id='city_banner'>
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

