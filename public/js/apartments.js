function editApartment(apartment){
    $('#form-edit-apartment').attr('action', 'apartments/' + apartment.id)
    $("#edit-dormitories").val(apartment.dormitories);
    $("#edit-suites").val(apartment.suites);
    $("#editApartment #garden").prop("checked", (apartment.garden == 1));
    $("#edit-square_meters").val(apartment.square_meters);
    $("#floor_plan_preview").attr('src', apartment.floor_plan);

    $("#editApartment").modal('toggle');


}


$('#edit-floor_plan').change(function(){
    const file = $(this)[0].files[0];
    const fileReader = new FileReader();
    fileReader.onloadend = function(){
        $("#floor_plan_preview").attr('src', fileReader.result)
    }
    fileReader.readAsDataURL(file)

});
