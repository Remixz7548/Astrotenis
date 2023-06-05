const BtnCorreo = document.getElementById("EnviarCorreo");


BtnCorreo.addEventListener("click", function(){
    event.preventDefault();
    var correo,psw, pswconfirm, expClave;
    correo = document.getElementById("Correo").value;
    psw = document.getElementById("Psw").value; 
    pswconfirm = document.getElementById("Pswconfirm").value; 

    expClave = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*-?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;

    if(correo.length == 0 || psw.length == 0 || pswconfirm == 0){
            swal("Error...", "No debe de haber campos vacios!", "error");
    } else if(!expClave.test(psw)){
        swal("Error...", "La Contaseña es muy debil!", "error");
    } else if(psw!=pswconfirm){
        swal("Error...", "Las Contaseñas no son iguales", "error"); 
    }
        else{
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });    

            $.ajax({
                type: "POST",
                url: "/cambio",
                data:{
                    email:correo,
                    password:psw
                },
                success:function (response) {
                    if (response.success) {
                        swal({
                            title: "Cambio de Contraseña Exitoso!",
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