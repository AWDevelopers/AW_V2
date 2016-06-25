		function eliminaNoticia(num,idNoticia){
				var div = document.getElementById("noticiaAdmin"+num);
                var dataString = 'id='+idNoticia;
                $.ajax({
                        type: "POST",
                        url: "includes/formProcesaEliminarNoticia.php",
                        data: dataString,
                        success: function(data) {
                            
                        }
                    });
                div.innerHTML = "";
         }  
