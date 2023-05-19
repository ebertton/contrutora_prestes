<div class="modal fade" id="editAchievement" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg bg-light rounded">
        <div class="modal-content bg-light rounded">
            <div class="modal-header">
                <h2 class="col-5 fw-light mt-3 mb-3">Editar conquista</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id='form-edit-achievement' method="POST" action="">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class='col-sm-12'>
                            <input required type="number" placeholder="Ano da conquista" class="form-control p-3  mt-3" name="year" id='edit-year'> <br>
                        </div>
                        <div class='col-sm-12'>
                            <textarea placeholder="texto da conquista" name="text" id="edit-text" cols="10" rows="3" class="form-control p-3  mt-3"></textarea>
                        </div>
                        
                        <div class='col-6 my-4 d-flex flex-row-reverse'>
                            <button type='button' data-bs-dismiss="modal" aria-label="Close"  class="btn btn-secondary form-control px-5 py-2 fw-bold fs-5">Cancelar</button>
                        </div>
                        <div class='col-6 my-4 d-flex flex-row-reverse'>
                            <button type="submit"  class="btn btn-success form-control px-5 py-2 fw-bold fs-5">Editar</button>
                        </div>
                    </div>
                    
                </form>
            </div>

        </div>
    </div>
</div>

