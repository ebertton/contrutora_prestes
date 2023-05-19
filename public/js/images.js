function editImage(image){
   
    $('#form-edit-image').attr('action', 'images/' + image.id)
    $('#edit-type-'+image.type).attr('checked', true);

    $("#preview_image").attr('src', image.image);

    $("#editImage").modal('toggle');


}


$('#edit-image').change(function(){
    const file = $(this)[0].files[0];
    const fileReader = new FileReader();
    fileReader.onloadend = function(){
        $("#preview_image").attr('src', fileReader.result)
    }
    fileReader.readAsDataURL(file)

});
