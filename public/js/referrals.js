$('#referral_image').change(function(){
    const file = $(this)[0].files[0];
    const fileReader = new FileReader();
    fileReader.onloadend = function(){
        $("#image_preview").attr('src', fileReader.result)
    }
    fileReader.readAsDataURL(file)

});
