var clicking = false;
var previousX;
var previousY;

$("#scroll").mousedown(function (e) {
    e.preventDefault();
    previousX = e.clientX;
    previousY = e.clientY;
    clicking = true;
});
$("#scroll").mousedown(function (e) {
    e.preventDefault();
    previousX = e.clientX;
    previousY = e.clientY;
    clicking = true;
});

$(document).mouseup(function () {

    clicking = false;
});

$("#scroll").mousemove(function (e) {

    if (clicking) {
        e.preventDefault();
        $("#scroll").scrollLeft($("#scroll").scrollLeft() + (previousX - e.clientX));
        $("#scroll").scrollTop($("#scroll").scrollTop() + (previousY - e.clientY));
        previousX = e.clientX;
        previousY = e.clientY;
    }
});



$("#scroll").mouseleave(function (e) {
    clicking = false;
});

$(document).ready(function () {
    var progressBar = $('main#empreendimento section#status .progress-bar');
    progressBar.css('width', progressBar.attr('data-content') + '%');
    var progressEtapa = $('main#empreendimento section#status .etapa').length;
    var progressEtapaConcluido = $('main#empreendimento section#status .etapa.concluido').length;
    var widthProgress = progressEtapaConcluido * 100 / progressEtapa;
    $("main#empreendimento section#status .etapas").get(0).style.setProperty("--etapaProgress", widthProgress + '%');
})


$('.etapa').click(function (e) {
    $('#img-status-empreendimento img').attr('src', $(this).attr('data-img-url'))
})




$(document).ready(function () {
    $("#imagens a[data-gallery='common-gallery']").slice(0, 6).show();
    if ($("#imagens a[data-gallery='common-gallery']:hidden").length == 0) {
        $("#common-carregar-mais").fadeOut('slow');
    }


});


$(document).ready(function () {
    $("#imagens a[data-gallery='example-gallery']").slice(0, 6).show();
    if ($("#imagens a[data-gallery='example-gallery']:hidden").length == 0) {
        $("#carregar-mais").fadeOut('slow');
    }


});

$("#carregar-mais").on('click', function (e) {
    e.preventDefault();
    $("#imagens a[data-gallery='example-gallery']:hidden").slice(0, 3).slideDown();
    if ($("#imagens a[data-gallery='example-gallery']:hidden").length == 0) {
        $("#carregar-mais").fadeOut('slow');
    }
    // $('html,body').animate({
    //     scrollTop: $(this).offset().top
    // }, 1500);
});


$("#common-carregar-mais").on('click', function (e) {
    e.preventDefault();
    $("#imagens a[data-gallery='common-gallery']:hidden").slice(0, 3).slideDown();
    if ($("#imagens a[data-gallery='common-gallery']:hidden").length == 0) {
        $("#common-carregar-mais").fadeOut('slow');
    }
    // $('html,body').animate({
    //     scrollTop: $(this).offset().top
    // }, 1500);
});

