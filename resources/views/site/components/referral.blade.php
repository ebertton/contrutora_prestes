<section id="indique-experiencia" class="position-relative d-flex align-items-center">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 col-md-10 col-lg-9 mx-auto text-center">
                <h2 class="text-center f-51 f-400 mb-4">Indique a experiência <span class="color-verde">Prestes
                        de morar</span></h2>
                <p class="f-22 mb-4" id='referral_text'></p>
                <a class="btn border-2 border bg-branco px-4 w-auto input-42 color-preto f-16 f-700 rounded hover-verde"
                    href="#" id='referral_button' role="button">Indique agora</a>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('js/jquery-3.6.0.js')}}"></script>

<script>
    $.ajax({
        url: "/referral/get",
        context: document.body
    }).done(function(referral) {

        $('#referral_text').html(referral.referral_text);
        $('#indique-experiencia').css('background-image', 'url('+referral.referral_image+')');
        $('#referral_button').attr('href', referral.referral_url);

    });
</script>
