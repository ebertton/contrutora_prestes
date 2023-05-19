
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg container">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h3 class="modal-title " >Editar usuário do painel</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-light">
                <form method="POST" id='form-edit-user' action="">
                    @csrf
                    @method('PUT')

                    <input required type='hidden' id='edit-id' name='id'>

                    <div class='row mb-4'>
                        <div class="col-xl-6">
                            <label for="recipient-name" class="col-form-label">Nome</label>
                            <input required type="text" name="name" class="form-control bg-light" id="edit-name" required>
                        </div>


                        <div class="col-xl-6">
                            <label for="recipient-whatsapp" class="col-form-label">WhatsApp</label>
                            <input required type="text" name="whatsapp" class="form-control bg-light" id="edit-whatsapp">
                        </div>

                        <div class="col-xl-12">
                            <label for="recipient-email" class="col-form-label">Email</label>
                            <input required type="text" name="email" class="form-control bg-light" id="edit-email" required>
                        </div>

                    </div>



                    <div class="modal-footer">
                        <div class='row col-12'>
                            <div class='col-xl-6'>
                                <button type="button" class="btn btn-secondary form-control" data-bs-dismiss="modal">Cancelar</button>
                            </div>
                            <div class='col-xl-6'>
                                <button type="submit" class="btn btn-success form-control">Editar</button>
                            </div>
                        </div>

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
