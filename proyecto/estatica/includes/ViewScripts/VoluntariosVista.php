<?php
	class VoluntariosVista{

		private $gestorProyectos;
        private $gestorVoluntarios;
		function __construct(){
			require_once "includes/ModelScripts/GestorProyectos.php";
            require_once "includes/ModelScripts/GestorVoluntarios.php";
            $this->gestorVoluntarios = new GestorVoluntarios();
			$this->gestorProyectos = new GestorProyectos();
		}

		function muestraPanelVoluntariado($idProyecto){
			$proyecto = $this->gestorProyectos->getProyecto($idProyecto);
			$fechaFin = $proyecto->getFechaFin();
			$fechaIni = $proyecto->getFechaCreacion();
			$html = <<<EOS
            
        	   <div id= "calendario">
                    <p>Día</p>
                    <input id="datepicker" type="date" name = "fecha" min=$fechaIni max=$fechaFin></input>
                </div>
                <div id = "horas">
                        <div id="inicio">
                            <p>Hora inicio</p>
                            <input id="horaIni" type="time" name = "iniHoras" size = 2></input> 
                        </div>

                        <div id ="fin">
                            <p>Hora fin</p>
                            <input id="horaFin" type="time" name = "finHoras" size = 2></input> 
                        </div>
                        <button onclick="aniadeHoras()" id= "anadir" type="submit" name = "añadir">AÑADIR</button> 
                        <div id="error"></div>
                </div>
				
				<div id="cajaHoras">
					<div style="width:auto;height:auto;line-height:3em;overflow:auto;padding:5px;"> 
						<div id = "mostrarHoras">
							<p><h2>Horarios</h2></p>
						</div>
					</div>
				</div>
			
                <div id ="pieCalendario">
                        <p>Selecciona uno o varios días del calendario, indica las horas de inicio y fin de tu voluntariado y pulsa el botón añadir para añadirla a tu bolsa de horas.</p>
                        <h1> FECHA DE INICIO DEL PROYECTO: $fechaIni </h1>
                        <h1> FECHA DE FIN DEL PROYECTO: $fechaFin </h1>
                        <button onclick="enviarDatos($idProyecto)" class= "boton" type="submit" name = "confirmar" value="CONFIRMAR">CONFIRMAR</button> 
               </div>
               
EOS;
		echo $html;
		}

        function muestraVoluntariosProyecto($idProyecto){
            $lista = $this->gestorVoluntarios->getVoluntarios($idProyecto);
            $iterator = $lista->getIterator();
            while($iterator->valid()){
                $dni= $iterator->current()->getDniUsuario();
                $dia= $iterator->current()->getDia();
                $horaEntrada= $iterator->current()->getHoraEntrada();
                $horaSalida= $iterator->current()->getHoraSalida();
                    $html = <<<EOS
                        <div class="noticiaAdmin">
                            <h3> Usuario: $dni </h3>
                            <p>Dia: $dia</p>
                            <p>$horaEntrada - $horaSalida</p>
                            <form name="vista" action="includes/formAdminMuestraVoluntariosProyecto.php" method="POST">
                                <input type="hidden" name="idProyecto" id="proyecto" value="$id" /> 
                                <input name="button" type="submit" value="Ver voluntarios"/>
                            </form>
                        </div> 
EOS;
            echo $html;  
        }


	}


}

?>