$('#benefits').change(function(){
    const file = $(this)[0].files[0];
    const fileReader = new FileReader();
    fileReader.onloadend = function(){
        $("#image_benefits_preview").attr('src', fileReader.result)
    }
    fileReader.readAsDataURL(file)

});


function editStatus (status) {
    console.log(status);
    $('#img_preview').attr('src', status.status_image);
    $('#edit-status_image').prop('src', status.status_image);
    $('#status_progress').val(status.status_progress);
    $('#form-edit-status').attr('action', 'status/'+status.id)
    $('#editStatus').modal('show');
}


$('#img_0').change(function(){
    const file = $(this)[0].files[0];
    const fileReader = new FileReader();
    fileReader.onloadend = function(){
        $("#preview_0").attr('src', fileReader.result)
    }
    fileReader.readAsDataURL(file)

});
$('#img_1').change(function(){
    const file = $(this)[0].files[0];
    const fileReader = new FileReader();
    fileReader.onloadend = function(){
        $("#preview_1").attr('src', fileReader.result)
    }
    fileReader.readAsDataURL(file)

});

$('#img_2').change(function(){
    const file = $(this)[0].files[0];
    const fileReader = new FileReader();
    fileReader.onloadend = function(){
        $("#preview_2").attr('src', fileReader.result)
    }
    fileReader.readAsDataURL(file)

});

$('#img_3').change(function(){
    const file = $(this)[0].files[0];
    const fileReader = new FileReader();
    fileReader.onloadend = function(){
        $("#preview_3").attr('src', fileReader.result)
    }
    fileReader.readAsDataURL(file)

});

$('#img_4').change(function(){
    const file = $(this)[0].files[0];
    const fileReader = new FileReader();
    fileReader.onloadend = function(){
        $("#preview_4").attr('src', fileReader.result)
    }
    fileReader.readAsDataURL(file)

});

$('#img_5').change(function(){
    const file = $(this)[0].files[0];
    const fileReader = new FileReader();
    fileReader.onloadend = function(){
        $("#preview_5").attr('src', fileReader.result)
    }
    fileReader.readAsDataURL(file)

});


function editLand (land) {
    $('#img_preview').attr('src', land.floor_plan);
    $('#edit-square_meters').val(land.square_meters);
    $('#form-edit-land').attr('action', 'lands/'+land.id)
    $('#editLand').modal('show');
}


$('#edit-floor_plan').change(function(){
    const file = $(this)[0].files[0];
    const fileReader = new FileReader();
    fileReader.onloadend = function(){
        $("#img_preview").attr('src', fileReader.result)
    }
    fileReader.readAsDataURL(file)

});

