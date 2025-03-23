/* VALIDACIONES */

/* LOGIN */


$('#log_inicio').click(function(event){
    var usuario, psw, expPsw;
    usuario = $('#log_usuario').val()
    psw = $('#log_password').val()
    expPsw = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}/;

    if(usuario.length == 0 || psw.length == 0){
        Swal.fire({
            title: "Datos Vacios",
            text: "Al parecer no llenaste todos los campos",
            icon: "question"
          });
        return false;
    }else if(!expPsw.test(psw)){
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "La contraseña no cumple el formato",
          });
        return false;
    }
    Swal.fire({
        title: "Inicio de Sesion Completado!",
        icon: "success",
        draggable: true
    }).then((result)=>{ 
      if(result.isConfirmed){
        window.location.href="/";
      }
    });
})


/* REGISTRO */




