<div class="col-sm-12 mt-5 d-flex justify-content-center">
    <div class="col-sm-10">
        <form action="/join-contact"  method='post' class=" p-5">
            @csrf
            <input type="hidden" name="type" value="contact">
            <input type="hidden" name="midia" value="">
            <input type="hidden" name="conversao" value="">
            <input type="hidden" name="page" value="{{$page ?? ""}}">
            <div class="row d-flex justify-content-between">
                <div class="col-sm-5">
                    <h3>
                        Fique por dentro das novidades
                    </h3>
                    <p>
                        Assine nossa newsletter e receba nossas novidades,
                        condições especiais e conteúdos exclusivos.
                    </p>

                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-6  mt-3">
                            <input required type="text" name="nome" placeholder="Digite seu nome"
                                   class="form-control bg-dark border-0 shadow-none input-50 "
                                   aria-describedby="helpId">
                        </div>
                        <div class="col-sm-6  mt-3">
                            <input required type="phone" placeholder="Digite seu telefone"
                                   class="form-control bg-dark border-0 shadow-none input-50 "
                                   aria-describedby="helpId" name="telefone">
                        </div>
                    </div>
                    <div class="row mt-3  mt-3">
                        <div class="col-sm-12">
                            <input required type="email" placeholder="Digite seu e-mail" name="email"
                                   class="form-control bg-dark border-0 shadow-none input-50 ">
                        </div>
                    </div>
                    <div class="row  mt-3">
                        <div class="col-sm-4">
                            <button
                                class="btn border-2 border bg-branco px-4 w-auto input-42 color-preto f-16 f-700 rounded hover-verde">
                                Cadastrar
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
