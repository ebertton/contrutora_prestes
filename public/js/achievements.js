function editAchievement(achievement){
   
    $('#form-edit-achievement').attr('action', '/admin/achievements/'+achievement.id)
    $("#edit-year").val(achievement.year);
    $("#edit-text").val(achievement.achievement);

    $("#editAchievement").modal('toggle');


}
