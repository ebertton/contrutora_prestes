
  function editUser(user){
   
        $('#form-edit-user').attr('action', '/admin/users/'+user.id)
        $("#edit-id").val(user.id);
        $("#edit-name").val(user.name);
        $("#edit-email").val(user.email);
        $("#edit-whatsapp").val(user.whatsapp);
        $("#editUser").modal('toggle');


  }


  $('#formedituser').submit(function(e){
    e.preventDefault();
    let id = $("#id").val();
    let nome = $("#nome").val();
    let sobrenome = $("#sobrenome").val();
    let pronome = $("#pronome").val();
    let email = $("#email").val();
    let emailSecundario = $("#emailSecundario").val();
    let whatsapp = $("#whatsapp").val();
    let tipoUsuario = $("input[type='radio'].radioclass:checked").val();
    let _token = $("input[name=_token]").val();

    $.ajax({
        url: "/usuarios/update",
        type: "PUT",
        data:{
            id: id,
            nome: nome,
            sobrenome: sobrenome,
            pronome: pronome,
            email: email,
            emailSecundario: emailSecundario,
            whatsapp: whatsapp,
            tipo: tipoUsuario,
            _token: _token
        }, success:function(response){
            Swal.fire(
                'Sucesso!',
                'O usuário foi editado com sucesso!',
                'success'
            ).then((result) => {
                window.location.reload();
            });

            $('#editusuario').modal('hide');
        }
    }).fail(function(){
        Swal.fire(
                'Erro!',
                'Ocorreu um erro ao editar usuário, verifique os dados e tente novamente!',
                'error'
            )
    })

  })
