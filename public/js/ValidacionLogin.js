const BtnLogin = document.getElementById("Login");


BtnLogin.addEventListener("click", function(){
    event.preventDefault();
    var usuario, psw;
    usuario = document.getElementById("Usuario").value;
    psw = document.getElementById("Contraseña").value; 

    if(usuario.length == 0 || psw.length == 0){
            swal("Error...", "No debe de haber campos vacios!", "error");
        }
        else{
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });    

            $.ajax({
                type: "POST",
                url: "/iniciosesion",
                data:{
                    username:usuario,
                    password:psw
                },
                success:function (response) {
                    if (response.successadmin) {
                        swal({
                            title: "Inicio de Sesion Exitoso!",
                            text: response.successadmin,
                            icon: "success",
                            confirmButtonText: "OK",
                        }).then(function() {
                            location.href = '/Admin';
                        });

                    }else if (response.success) {
                        swal({
                            title: "Inicio de Sesion Exitoso!",
                            text: response.success,
                            icon: "success",
                            confirmButtonText: "OK",
                        }).then(function() {
                            location.href = '/';
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
