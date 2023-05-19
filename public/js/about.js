$('#life_institute_image_1').change(function(){
    const file = $(this)[0].files[0];
    const fileReader = new FileReader();
    fileReader.onloadend = function(){
        $("#life_institute_preview_1").attr('src', fileReader.result)
    }
    fileReader.readAsDataURL(file)

});


$('#life_institute_image_2').change(function(){
    const file = $(this)[0].files[0];
    const fileReader = new FileReader();
    fileReader.onloadend = function(){
        $("#life_institute_preview_2").attr('src', fileReader.result)
    }
    fileReader.readAsDataURL(file)

});

$('#ceo_image').change(function(){
    const file = $(this)[0].files[0];
    const fileReader = new FileReader();
    fileReader.onloadend = function(){
        $("#ceo_preview").attr('src', fileReader.result)
    }
    fileReader.readAsDataURL(file)

});

$('#your_home_image').change(function(){
    const file = $(this)[0].files[0];
    const fileReader = new FileReader();
    fileReader.onloadend = function(){
        $("#your_home_preview").attr('src', fileReader.result)
    }
    fileReader.readAsDataURL(file)

});
