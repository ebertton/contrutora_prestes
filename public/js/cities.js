const { forEach } = require("lodash");

$('#city_banner').change(function(){
    const file = $(this)[0].files[0];
    const fileReader = new FileReader();
    fileReader.onloadend = function(){
        $("#image_preview").attr('src', fileReader.result)
    }
    fileReader.readAsDataURL(file)

});

function editCity(city){
    
    $('#form-edit-city').attr('action', '/admin/cities/'+city.id)
    $("#edit-image_preview").attr('src', city.city_banner);
    
    
    $("#edit-city_describe").val(city.city_describe);
    $("#edit-city_name").val(city.city_name);

    $("#editCity").modal('toggle');


}
