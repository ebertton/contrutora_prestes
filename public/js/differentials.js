function editDifferential(differential){
   
    $('#form-edit-differential').attr('action', '/admin/differentials/'+differential.id)
    $("#edit-icon-preview").attr('src', differential.icon);
    $("#edit-title").val(differential.title);
    $("#edit-text").val(differential.differential);

    $("#editDifferential").modal('toggle');


}


$('#edit-icon').change(function(){
    const file = $(this)[0].files[0];
    const fileReader = new FileReader();
    fileReader.onloadend = function(){
        $("#edit-icon-preview").attr('src', fileReader.result)
    }
    fileReader.readAsDataURL(file)

});
