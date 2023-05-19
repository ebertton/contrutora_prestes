<div class="modal fade" id="editApartment" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg bg-light rounded">
        <div class="modal-content bg-light rounded">
            <div class="modal-header">
                <h2 class="col-5 fw-light mt-3 mb-3">Editar apartamento</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="" id='form-edit-apartment' enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class='col-sm-4'>
                            <label for='dormitories'>Dormitórios</label>
                            <input required type="number"  class="form-control p-3  mt-3" name="dormitories" id='edit-dormitories'> <br>
                        </div>
                        <div class='col-sm-4'>
                            <label for='suites'>Suítes</label>
                            <input required name="suites" id="edit-suites" type='number' class="form-control p-3  mt-3">
                        </div>
                        <div class='col-sm-4'>
                            <label for='square_meters'> Metros quadrados</label>
                            <input required step=".01"  name="square_meters" id="edit-square_meters" type='number' class="form-control p-3  mt-3">
                        </div>

                        <div class='col-sm-4 mb-5'>
                            <label for='garden'>
                                <input type="checkbox" name="garden" id="garden" class="p-3  mt-1" value="1">  Apartamento Garden
                            </label>
                        </div>

                        <div class='col-sm-12'>
                            <label for='floor_plan'>Planta do apartamento</label>
                            <input name="floor_plan" id="edit-floor_plan" type='file' class="form-control p-3  mb-3">
                        </div>

                        <img src='' id='floor_plan_preview'>

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

