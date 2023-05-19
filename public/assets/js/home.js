$('#listaLocais').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    variableWidth: true,
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 1

            }
        },
        {
            breakpoint: 480,
            settings: {
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1

            }
        }
    ]
});



$('#listaLocais a').click(function(e){
    $('#listaLocais a').removeClass('active');
    $(this).addClass('active');
    var texto = $('ul#listaLocais a.active').text()
    $('strong#nome-empreendimento-ativo').text(texto)
})

$(document).ready(function(){
    var texto = $('ul#listaLocais li:not(.slick-cloned) a.active').text()
    $('strong#nome-empreendimento-ativo').text(texto)
})
