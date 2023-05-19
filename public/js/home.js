$('#home_video').keyup(function(){

        $("#video_preview").attr('src', 'https://youtube.com/embed/'+this.value);

});

$('#about_video').keyup(function(){

    $("#video_preview").attr('src', 'https://youtube.com/embed/'+this.value);

});