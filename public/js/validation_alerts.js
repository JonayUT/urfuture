import Swal from "sweetalert2";

/* VALIDACIONES */

/* LOGIN */


$('#iniciar').click(function(event){
    let usuario, psw;
    usuario = $('#usuario').val()
    psw = $('#password').val()

    if(usuario.length == 0 || psw.length == 0){
        Swal.fire({
            title: "Datos Vacios",
            text: "Al parecer no llenaste los campos",
            icon: "question"
          });
        return false;
    }
    swal("Muy bien", "No hay campos invalidos", "success");
})


