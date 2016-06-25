 		function eliminaProyecto(num,idProyecto){
                var div = document.getElementById("proyectoAdmin"+num);
                var dataString = 'id='+idProyecto;
                $.ajax({
                        type: "POST",
                        url: "includes/formEliminaProyecto.php",
                        data: dataString,
                        success: function(data) {
                            
                        }
                    });
                div.innerHTML = "";
         }  