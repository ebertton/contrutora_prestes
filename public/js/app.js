$.getScript("/js/user-manager.js");
$.getScript("/js/achievements.js");
$.getScript("/js/differentials.js");
$.getScript("/js/sales-center.js");
$.getScript("/js/apartments.js");
$.getScript("/js/enterprises.js");
$.getScript("/js/images.js");
$.getScript("/js/home.js");
$.getScript("/js/about.js");
$.getScript("/js/referrals.js");
$.getScript("/js/cities.js");

window.addEventListener('DOMContentLoaded', event => {

    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

$(document).ready(function() {
    elements = $('.datatable');
    if(elements.length != '0') {
        for (i = 0; i <= elements.length; i++) {

            var orderer = parseInt($(elements[i]).attr('data-orderer'));
            var table = $(elements[i]).DataTable({
                "order": [[ orderer, "desc" ]],
                "language": {
                    "url": "/js/datatables.pt.json"
                }
            } );


        }

        window.setTimeout('estiloTabela()', 100);
    }


});


function estiloTabela(){
    var dataTableTitle = document.getElementById('DataTables_Table_0_length');
    var dataTableFilter = document.getElementById('DataTables_Table_0_filter');
    var title = ($("#DataTables_Table_0").attr('data-table-title')) ? $("#DataTables_Table_0").attr('data-table-title') : '';
    document.getElementById("DataTables_Table_0_filter").insertAdjacentHTML('beforeend', '<i class="fa fa-search search-icon"></i>');
    document.getElementById("DataTables_Table_0_length").insertAdjacentHTML('beforeend', '<h2 class="fw-light">'+title+'</h2>');
    $('#divFiltro1').append($(dataTableTitle));
    $('#divFiltro2').append($(dataTableFilter));
}



function alertSuccess(){
    Swal.fire(
        'Sucesso!',
        'OperaÃ§Ã£o realizada com sucesso!',
        'success'
    )
}

function alertError(){
    Swal.fire(
        'Erro!',
        'Ocorreu um erro ao processar sua solicitaÃ§Ã£o!',
        'error'
    )
}

function deleteConfirm(e){
    console.log(e);
    Swal.fire({

        title: 'VocÃª realmente deseja excluir esse registro?',
        showDenyButton: true,
        denyButtonText: `Cancelar`,
        confirmButtonText: 'Excluir',


    }).then((result) => {

        if (result.isConfirmed) {

            $('#'+e).submit();
        } else if (result.isDenied) {
            Swal.fire('O registro nÃ£o foi excluÃ­do', '', 'info')
        }

    });


}



$('#showPassword').on('click',function () {
    var newType = ($('#password').attr('type') == 'password') ? 'text' : 'password';
    $('#password').attr('type', newType);
});
