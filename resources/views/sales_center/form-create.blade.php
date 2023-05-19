<div class="modal fade" id="create-sales-center" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg bg-light rounded">
        <div class="modal-content bg-light rounded">
            <div class="modal-header">
                <h2 class="col-5 fw-light mt-3 mb-3">Adicionar Central de vendas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row">
                       
                        <div class='col-sm-6'>
                            <input required maxlength='8' type="text" placeholder="CEP" class="form-control" name="zip" id='zip'>
                        </div>
                        
                        <div class='col-sm-6'>
                            <input required type="text" readonly placeholder="Rua" class="form-control" name="street" id='street'> <br>
                        </div>

                        <div class='col-sm-6'>
                            <input required type="text" readonly placeholder="Bairro" class="form-control" name="neighborhood" id='neighborhood'>
                        </div>
                        
                        <div class='col-sm-4'>
                            <input required type="text" readonly placeholder="Cidade" class="form-control" name="city" id='city'> <br>
                            
                        </div>

                        <div class='col-sm-2'>
                            <input required type="text" readonly placeholder="Estado" class="form-control" name="state" id='state'>
                        </div>

                        <div class='col-sm-6'>
                            <input type="text" placeholder="Complemento" class="form-control" name="complement" id='complement'> <br>
                        </div>

                        <div class='col-sm-6'>
                            <input required type="text" placeholder="Número" class="form-control" name="number" id='number'>
                        </div>

                        <div class='col-sm-6'>
                            <input required type="text" placeholder="Email" class="form-control" name="email" id='email'>
                        </div>
                        
                        <div class='col-sm-6'>
                            <input required type="text" placeholder="Telefone" class="form-control" name="phone" id='phone'> <br>
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

