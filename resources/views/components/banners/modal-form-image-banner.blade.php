<div class="modal fade" id="createBanner" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg bg-light rounded">
        <div class="modal-content bg-light rounded">
            <div class="modal-header">
                <h2 class="col-5 fw-light mt-3 mb-3">Novo banner</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" id="form-banner"  action="{{ route('banners.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="row">

                        <div class='col-sm-10'>
                            <label for='title'>Título</label>
                            <input type="text" placeholder="Insira o título do banner" class="form-control p-3"
                                   name="title" id='title' value="{{ old('titulo') }} ">
                        </div>
                        <div class='col-sm-2'>
                            <label for='order'>Ordem</label>
                            <select
                                class="select-order form-select form-control p-3"
                                name="order" aria-label="Default select">
                                <option value="1">Nº 1</option>
                                <option value="2">Nº 2</option>
                                <option value="3">Nº 3</option>
                                <option value="4">Nº 4</option>
                                <option selected value="5">Nº 5</option>
                            </select>
                        </div>
                        <div class='col-sm-12 pt-2'>
                            <label for='title'>Link</label>
                            <input type="link" placeholder="Insira o link do banner" class="form-control p-3"
                                   name="link" id='link' value="{{ old('link') }}">
                        </div>
                        <div class='col-sm-12'>
                            <label for='floor_plan'>Imagem</label>
                            <input required name="path_banner" id="image" onchange="imagePreview(this);" type='file' class="form-control p-3  mb-3">
                        </div>

                        <div class="col-sm-12">
                            <img id="image_preview" src="" class="rounded mx-auto d-block" style="max-width: 100%">
                        </div>

                        <div class='col-6 my-4 d-flex flex-row-reverse'>
                            <button type='button' data-bs-dismiss="modal" aria-label="Close"
                                    class="btn btn-secondary form-control px-5 py-2 fw-bold fs-5">Cancelar
                            </button>
                        </div>
                        <div class='col-6 my-4 d-flex flex-row-reverse'>
                            <button type="submit" class="btn btn-success form-control px-5 py-2 fw-bold fs-5">Enviar
                            </button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<script>
    function imagePreview(input)
    {

        if (input.files && input.files[0])
        {

            var r = new FileReader();

            r.onload = function(e)
            {
                $("#image_preview").show();
                $("#image_preview").attr("src", e.target.result);


            }

            r.readAsDataURL(input.files[0]);

        }
    }


</script>

