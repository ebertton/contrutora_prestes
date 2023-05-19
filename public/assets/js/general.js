$.getScript('/assets/js/sobre.js');
$.getScript('/assets/js/home.js');
$.getScript('/assets/js/empreendimentos.js');
$.getScript('/assets/js/empreendimento.js');
$.getScript('/assets/js/central-vendas.js');

$('img').attr("loading", "lazy")

$('#check, #mobile-check').change(function () {
    $(".menu").toggleClass('open')
})

$('#mobile-check').change(function () {
    $("header").toggleClass('position-fixed')
})

$('#label-buscar i').click(function () {
    if (!$('.mobile-nav').is(':visible')) {
        $(".menu").removeClass('open')
    }
})


$('.slide-empreendimentos').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    variableWidth: true,
    focusOnSelect: true,
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 2,
                infinite: true,
                dots: false,
                arrows: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 3

            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                infinite: true,

            }
        }
    ]
});

$('#float-chat, #chat').click(function (e) {
    e.preventDefault();
    $('#blip-chat-icon').click();



})



$('#close-chat').click(function (e) {
    e.preventDefault();
    $('#blip-chat-icon').click();
})



$('#politica-privacidade a.btn').click(function (e) {
    e.preventDefault();
    localStorage.setItem("accept", true);
    $('#politica-privacidade').addClass('d-none');
    $('#politica-privacidade').removeClass('d-block');

})

$(document).ready(function () {

    if (localStorage.getItem("accept") == null) {
        $('#politica-privacidade').addClass('d-block')
        $('#politica-privacidade').removeClass('d-none');
    } else if (localStorage.getItem("accept") == true) {
        $('#politica-privacidade').addClass('d-none')
        $('#politica-privacidade').removeClass('d-block');
    }
})



document.addEventListener('DOMContentLoaded', () => {
    // const controls = [
    //     'play-large', // The large play button in the center
    //     'play', // Play/pause playback
    //     'settings', // Settings menu
    // ];
    const controls = '<button id="btn-pause" type="button" class="plyr__control plyr__control--pressed plyr__tab-focus" data-plyr="play" aria-label="Play"><svg class="icon--pressed" role="presentation" focusable="false"><use xlink:href="#plyr-pause"></use></svg><svg class="icon--not-pressed" role="presentation" focusable="false"><use xlink:href="#plyr-play"></use></svg><span class="label--pressed plyr__sr-only">Pause</span><span class="label--not-pressed plyr__sr-only">Play</span></button><button type="button" class="plyr__control plyr__control--overlaid" data-plyr="play" aria-label="Play"><svg aria-hidden="true" focusable="false"><use xlink:href="#plyr-play"></use></svg><span class="plyr__sr-only">Play</span></button>';
    const settings = ['quality', 'speed' , 'loop'];
    const player = Plyr.setup('#player', {
        controls
    });

});



// Setup the player
// const player = new Plyr('#player', {
//     controls
// });

/*MASK PHONE*/
var behavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
},
    options = {
        onKeyPress: function (val, e, field, options) {
            field.mask(behavior.apply({}, arguments), options);
        }
    };

$("[type^='phone']").mask(behavior, options);


/*SEARCH BAR */
$('label#label-buscar i').click(function () {
    if($('input[type="text"]').val() != "")
    $('label#label-buscar form').submit()
})

function clearForm(formId){
    formId.find('input[type="text"]').val('')
    formId.find('input[type="number"]').val('')
    formId.find('input[type="date"]').val('')
    formId.find('textarea').text('')
    $('#image_preview').attr('src', '');
    if (editor){
        editor.setData('');
    }
}


function alterActionForm(action, formId){
    formId.attr('action', action).attr('method', 'POST');
}

function removeInputMethod(){
    $('input[name="_method"]').remove();
}
