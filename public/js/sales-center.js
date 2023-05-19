$('#zip').keyup(function() {
    clearFields();
    if (this.value.length == 8) {
        $.get('https://viacep.com.br/ws/'+this.value+'/json/', function(address){
        $('#street').val(address.logradouro);
        $('#neighborhood').val(address.bairro);
        $('#street').val(address.logradouro);
        $('#city').val(address.localidade);
        $('#state').val(address.uf);
    });
    }

    
});

$('#edit-zip').keyup(function() {
    clearFields();
    if (this.value.length == 8) {
        $.get('https://viacep.com.br/ws/'+this.value+'/json/', function(address){
        $('#edit-street').val(address.logradouro);
        $('#edit-neighborhood').val(address.bairro);
        $('#edit-street').val(address.logradouro);
        $('#edit-city').val(address.localidade);
        $('#edit-state').val(address.uf);
    });
    }

    
});

function clearFields() {
        $('#street').val('');
        $('#neighborhood').val('');
        $('#street').val('');
        $('#city').val('');
        $('#state').val('');
}

function editSalesCenter(saleCenter){

    $('#form-edit-sales-center').attr('action', '/admin/sales-center/'+saleCenter.id);
    $('#edit_img_preview').attr('src', saleCenter.sales_center_image);
    $("#edit-zip").val(saleCenter.zip_code);
    $("#edit-street").val(saleCenter.street);
    $("#edit-neighborhood").val(saleCenter.neighborhood);
    $("#edit-city").val(saleCenter.cities.city_name);
    $("#edit-state").val(saleCenter.state);
    $("#edit-complement").val(saleCenter.complement);
    $("#edit-email").val(saleCenter.mail);
    $("#edit-phone").val(saleCenter.phone);
    $("#edit-number").val(saleCenter.number);


    $("#edit-sales-center").modal('toggle');


}

$('#sales_center_image').change(function(){
    const file = $(this)[0].files[0];
    const fileReader = new FileReader();
    fileReader.onloadend = function(){
        $("#img_preview").attr('src', fileReader.result)
    }
    fileReader.readAsDataURL(file)

});

$('#edit_sales_center_image').change(function(){
    const file = $(this)[0].files[0];
    const fileReader = new FileReader();
    fileReader.onloadend = function(){
        $("#edit_img_preview").attr('src', fileReader.result)
    }
    fileReader.readAsDataURL(file)

});