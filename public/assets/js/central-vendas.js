$('#listaLocaisVendas').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 7,
    slidesToScroll: 1,
    variableWidth: false,
    focusOnSelect: true,
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
                slidesToShow: 4,
                slidesToScroll: 1

            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: true,
                infinite: true,
                variableWidth: false,

            }
        }
    ]
});

$('#listaLocaisVendas a').click(function (e) {
    $('#listaLocaisVendas a').removeClass('active');
    $(this).addClass('active');
})
