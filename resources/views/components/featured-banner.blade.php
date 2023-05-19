<div>
    <div class="modal fade" id="orderBanner" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg bg-light rounded">
            <div class="modal-content bg-light rounded">
                <div class="modal-header">
                    <h1 class="col-11 fw-light mt-3 mb-3">Ordem dos banners</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="formOrder">
                        @csrf
                        <div class="row">
                            <div class='col-sm-6'>
                                <input  type="text" placeholder="name" class="form-control p-3  mt-3"
                                        name="name" id='nameEnterprise' disabled>
                            </div>
                            <div class='col-sm-6'>
                                <select
                                    class="select-order form-select form-control p-3  mt-3"
                                    name="order" aria-label="Default select">
                                    <option value="1">Nº 1</option>
                                    <option value="2">Nº 2</option>
                                    <option value="3">Nº 3</option>
                                    <option value="4">Nº 4</option>
                                    <option selected value="5">Nº 5</option>
                                </select>
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
