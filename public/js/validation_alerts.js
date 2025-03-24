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

$('#registro').click(function(event){

  var nombre, apellido, correo, usuario, psw, psw2, expPsw, expCorreo;
  nombre = $('#name').val()
  apellido = $('#lastname').val()
  correo = $('#email').val()
  usuario = $('#username').val()
  psw = $('#password').val()
  psw2 = $('#password_confirmation').val()
  expPsw = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}/;
  expCorreo = /\w+@\w+\.+[a-z]/;


  if(nombre.length == 0 || apellido.length == 0 || correo.length == 0 || usuario.length == 0 || psw.length == 0 || psw2.length == 0){
      Swal.fire({
          title: "Datos Vacios",
          text: "Al parecer no llenaste todos los campos",
          icon: "question"
        });
      return false;
  }else if(!expCorreo.test(correo)){
      Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "El correo no es valido",
        });
      return false;
  }else if(!expPsw.test(psw)){
      Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "La contraseña no cumple el formato",
        });
      return false;
  }else if(psw != $('#password_confirmation').val()){
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Las contraseñas no coinciden",
    });
    return false;
  }
  Swal.fire({
      title: "Registro Completado!",
      icon: "success",
      draggable: true
  }).then((result)=>{ 
    if(result.isConfirmed){
      window.location.href="/login";
    }
  });

})
