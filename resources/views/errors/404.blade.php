@include('site.components.header')
    <main id="erro-404">
        <section id="sorry">
            <div class="container pt-5">
                <div class="row py-5">
                    <div class="col-12 text-center py-5">
                        <img src="../assets/img/banner-404.png" alt="" class="img-fluid">
                        <h2 class="f-40 text-center f-400 py-5">Opa, sentimos muito por não encontrar seu lar dessa vez.</h2>
                        <a class="btn border-2 border  px-4 input-42 bg-branco color-preto rounded-3 f-16 hover-verde"
                                    href="#" role="button">Voltar para home</a>
                    </div>
                </div>
            </div>
        </section>
        
        @include('site.components.form-contact')
    </main>
@include('site.components.footer')