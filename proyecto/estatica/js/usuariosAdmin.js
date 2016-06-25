 		function eliminaUsuario(num,DNI){
                var div = document.getElementById("usuarioAdmin"+num);
                var dataString = 'id='+DNI;
                $.ajax({
                        type: "POST",
                        url: "includes/formEliminaUsuario.php",
                        data: dataString,
                        success: function(data) {
                            
                        }
                    });
                div.innerHTML = "";
         }  
