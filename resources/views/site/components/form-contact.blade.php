<section id="form">
    <div class="container py-5">
        <div class="row py-5 justify-content-lg-between">
            <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                <h2 class="f-54 f-400 color-verde" id='title_contact'></h2>
                <div class="contatos d-flex flex-column gap-4 pt-5">
                    <div class="phone d-flex flex-row align-items-center gap-3">
                        <img src="/assets/img/icon-telephone.png" alt="" srcset="">
                        <p id='phone' class="f-16 mb-0"></p>
                    </div>
                    <div class="email d-flex flex-row align-items-center gap-3">
                        <img src="/assets/img/icon-email.png" alt="" srcset="">
                        <p class="f-16 mb-0" id='email'></p>
                    </div>
                </div>
                <div class="sociais d-flex gap-5 align-items-center pt-5">
                    <a href="#" id='facebook' target="_blank" rel="noopener noreferrer" class="f-24 color-cinza-claro">
                        <i class="fa-brands fa-facebook-f f-20"></i>
                    </a>
                    <a href="#" id='instagram' target="_blank" rel="noopener noreferrer" class="f-24 color-cinza-claro">
                        <i class="fa-brands fa-instagram f-24"></i>
                    </a>
                    <a href="#" id='youtube' target="_blank" rel="noopener noreferrer" class="f-24 color-cinza-claro">
                        <i class="fa-brands fa-youtube f-24"></i>
                    </a>
                </div>
            </div>
            <script>
                function validarPost(){
                    if(grecaptcha.getResponse() != "") return true;

                    return false;
                }
            </script>
            <div class="col-12 col-md-6 col-lg-6">
                <form action="/join-contact" onsubmit="return validarPost()" method='post' id="form-post" class="d-flex flex-column gap-3 align-items-start">
                    <!--<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" /><br >-->

                    <input type="hidden" name="type" value="contact">
                    <input type="hidden" name="midia" value="">
                    <input type="hidden" name="conversao" value="">
                    <input type="hidden" name="page" value="{{$page ?? ""}}">
                    @csrf
                    @isset($page)
                        @switch($page)
                            @case($page == 'enterpise-unico')
                            <input type="hidden" id="cv" name="empreendimentoNomeContato" value="{{$empreendimento}}">
                            @break;
                            @case($page == 'cidade')
                            <input type="hidden" name="cidadeNomeContato" value="{{strtolower($cidadeNome)}}">
                            @break;
                        @endswitch
                    @endisset
                    <div class="mb-3 w-100">
                        <label for="" class="form-label f-14">Nome completo</label>
                        <input required type="text" class="form-control bg-dark border-0 shadow-none input-50 " name="nome"
                               id="" aria-describedby="helpId" placeholder="" required>
                    </div>
                    <div class="mb-3 w-100">
                        <label for="" class="form-label f-14">E-mail</label>
                        <input required type="email" class="form-control bg-dark border-0 shadow-none input-50 " name="email"
                               id="" aria-describedby="helpId" placeholder="" required>
                    </div>
                    <div class="mb-3 w-100">
                        <label for="" class="form-label f-14">Telefone para contato</label>
                        <input required type="phone" class="form-control bg-dark border-0 shadow-none input-50 " name="telefone"
                               id="" aria-describedby="helpId" placeholder="" required>
                    </div>
                    <div class="mb-3 w-100">
                        <label for="" class="form-label f-14">Deixe aqui sua mensagem ou sua dúvida.</label>
                        <textarea class="form-control bg-dark border-0 shadow-none  " name="message" id="" rows="5"
                                  required></textarea>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6LdHjeIhAAAAABzGNn-bA7XlEOXm94z0HUEY7-YA"></div>
                    <input required type="submit"
                           class="btn border-2 rounded-3 border-verde bg-verde px-5 input-42 d-flex align-items-center color-ciano f-16 hover-ciano"
                           href="#" role="button" value="Enviar">
                </form>
                @if(session('form-success')) <small class='text-success'> Mensagem enviada com sucesso</small> @endif
            </div>
        </div>
    </div>
</section>


<script src="{{asset('js/jquery-3.6.0.js')}}"></script>

<script>
    $.ajax({
        url: "/contact/get",
        context: document.body
    }).done(function (contact) {
        $('#title_contact').html(contact.title_contact);
        $('#text_contact').html(contact.text_contact);
        $('#phone').html(contact.phone);
        $('#email').html(contact.email);
        $('#address').html(contact.address);
        $('#facebook').attr('href', contact.facebook);
        $('#instagram').attr('href', contact.instagram);
        $('#youtube').attr('href', contact.youtube);
        $('#whatsapp').attr('href', contact.whatsapp);
        $('#mail-contact').attr('href', 'mailto:' + contact.email);

    });
</script>
