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
                        <button onclick="aniadeHoras()" id= "anadir" type="submit" name = "añadir">Añadir</button> 
                        <form action="vistaPerfilUsuario.php">
                            <input onclick="enviarDatos($idProyecto)" class= "boton" type="submit" name = "confirmar" value="Confirmar"></input>
                        </form> 
                        <div id="error"></div>
                </div>
				 <p><h2>Horarios</h2></p>
				<div id="cajaHoras">
               
					<div style="width:auto;height:auto;line-height:3em;overflow:auto;padding:5px;"> 
						<div id = "mostrarHoras">
						</div>
					</div>
				</div>
			
                <div id ="pieCalendario">
                        <p>Selecciona uno o varios días del calendario, indica las horas de inicio y fin de tu voluntariado y pulsa el botón añadir para añadirla a tu bolsa de horas.</p>
                        <p> FECHA DE INICIO DEL PROYECTO: $fechaIni </p>
                        <p> FECHA DE FIN DEL PROYECTO: $fechaFin </p>
                        
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
                $id = $iterator->current()->getIdVoluntariado();
                    $html = <<<EOS
                        <div id = "$id" class="noticiaAdmin">
                            <h3> Usuario: $dni </h3>
                            <p>Dia: $dia</p>
                            <p>$horaEntrada - $horaSalida</p>
                                <input type="hidden" name="idProyecto" id="proyecto" value="$id" /> 
                                <button onCLick="eliminarVoluntariado($id)" name="button" type="submit" value="Eliminar">Eliminar</button>
                        </div> 
EOS;
            echo $html; 
            $iterator->next(); 
        }


	}


}

?>