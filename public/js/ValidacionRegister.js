const BtnRegistrar = document.getElementById("Registrar");

BtnRegistrar.addEventListener("click", function(){
    event.preventDefault();
    var captchaResponse = grecaptcha.getResponse();
    var nombre, correo, usuario, psw, pswconfirm, expresion2, expClave, expNombre, _token;
    nombre = document.getElementById("NombreR").value.toLowerCase();
    nombre = nombre.replace(/([a-zñ])[\wñ]*/g, function(l){ return l.toUpperCase() }); 
    usuario = document.getElementById("UsuarioR").value;
    correo = document.getElementById("Correo").value; 
    psw = document.getElementById("Psw").value; 
    pswconfirm = document.getElementById("Pswconfirm").value;
    _token = $("input[name=_token]").val();

    expresion = /\w+@\w+\.+[a-z]/;
    expClave = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*-?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;
    expresion2 = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
    expNombre = /^(\b[a-zA-ZñÑ]+\b\s+){1,5}\b[a-zA-ZñÑ]+\b(\s*)$/;

    if(nombre.length == 0 || usuario.length == 0 || correo.length == 0 || psw.length == 0 ||
        pswconfirm.length == 0){
            swal("Error...", "No debe de haber campos vacios!", "error");    
        }else if (!expNombre.test(nombre)) {
            swal("Error...", "El nombre debe tener al menos dos nombres y solo permite letras", "error");
        }else if(nombre.length>225){
            swal("Error...", "El nombre no debe tener una longitud mayor a 255", "error");  
        } else if(usuario.length>25){
            swal("Error...", "El usuario no debe tener una longitud mayor a 25", "error");
        } else if(correo.length>100){
            swal("Error...", "El correo no debe tener una longitud mayor a 100", "error");  
        } else if(!expresion2.test(correo)){
            swal("Error...", "El correo No es valido!", "error");
        } else if(!expClave.test(psw)){
            swal("Error...", "La Contaseña es muy debil!", "error");
        } else if(psw!=pswconfirm){
            swal("Error...", "Las Contaseñas no son iguales", "error"); 
        } else if (captchaResponse.length == 0) {
            swal("Error...", "Debes completar el captcha", "error");
        } else{
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });    

            $.ajax({
                type: "POST",
                url: "/registro",
                data:{
                    nombre:nombre, 
                    usuario:usuario, 
                    correo:correo, 
                    psw:psw,
                    token: _token
                },
                success:function (response) {
                    if (response.success) {
                        swal({
                            title: "Registro exitoso!",
                            text: response.success,
                            icon: "success",
                            confirmButtonText: "OK",
                        }).then(function() {
                            location.href = '/Login';
                        });
                    }else if (response.error) {
                        swal({
                            title: "Error!",
                            text: response.error,
                            icon: "error",
                            confirmButtonText: "OK",
                        });
                    }
                },
                error: function (data, textStatus, errorThrown) {
                    console.log(data);
            
                }
            });

        }
});