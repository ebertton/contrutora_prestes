$('.conquistas').slick({
	dots: false,
	arrows: true,
	infinite: false,
	slidesToShow: 1,
	slidesToScroll: 1,
	variableWidth: true,
	focusOnSelect: true,
	responsive: [
		{
			breakpoint: 991,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1,
				infinite: false,
				dots: false,
				arrows: true
			}
		},
		{
			breakpoint: 600,
			settings: {
				infinite: false,
				slidesToShow: 3,
				slidesToScroll: 1

			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				arrows: false,
				infinite: true,

			}
		}
	]
});


function openIntitutotab() {
	$('#instituto-tab').tab('show');

}

function openDiferenciaistab() {
    $('#diferenciais-tab').tab('show');


}

let searchParams = new URLSearchParams(window.location.search)
let param = searchParams.get('open')

if (param == 'instituto') {
	openIntitutotab()
}


function parseQueryString() {
	var parsedParameters = {},
		uriParameters = location.href.split('?');

	for (var i = 0; i < uriParameters.length; i++) {
		var parameter = uriParameters[i].split('=');
		parsedParameters[parameter[0]] = decodeURIComponent(parameter[1]);
	}

	return parsedParameters;
}
function scrollEl() {
	if ($('#imovel-prestes').length < 1) {
		scrollEl()
	} else {
		$(document).ready($(window).scrollTop($('#imovel-prestes').offset().top))

	}

}


var parameter = parseQueryString().open;
$(document).ready(function () {
	if (parameter == 'instituto') {
		openIntitutotab();
		scrollEl();
	}
})

