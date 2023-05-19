<div class="modal fade" id="createStatus" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg bg-light rounded">
        <div class="modal-content bg-light rounded">
            <div class="modal-header">
                <h2 class="col-5 fw-light mt-3 mb-3">Adicionar status</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row">

                        <div class='col-sm-12 mb-3'>
                            <select name='status' id='status' class='form-control'>

                                <option selected disabled>Selecione o status</option>
                                @foreach ($availableStatus as $value)
                                    <option value='{{$value}}'>{{App\Models\Status::getLabel($value)}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class='col-sm-12 mb-3'>
                            <input type="number" min="0" max="100" name="status_progress" class="form-control" placeholder="Porcentagem de conclusão deste Status" value="">
                        </div>

                        <div class='col-sm-12'>
                            <label for="status_image">Imagem para este Status</label>
                            <br>
                            <input required type="file" placeholder="Imagem do status" class="form-control p-3  mt-3" name="status_image" id='status_image'> <br>
                        </div>

                        <div class='col-6 my-4 d-flex flex-row-reverse'>
                            <button type='button' data-bs-dismiss="modal" aria-label="Close" class="btn btn-secondary form-control px-5 py-2 fw-bold fs-5">Cancelar</button>
                        </div>

                        <div class='col-6 my-4 d-flex flex-row-reverse'>
                            <button type="submit" class="btn btn-success form-control px-5 py-2 fw-bold fs-5">Enviar</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

