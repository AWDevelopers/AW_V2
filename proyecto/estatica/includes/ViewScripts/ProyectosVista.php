<?php
	
	class vistaProyectos{
		
		private $ListaProyectos;
		function __construct(){
			require_once '/../ModelScripts/GestorProyectos.php';
			$this->ListaProyectos = new GestorProyectos();
		}

	function muestraProyectosVoluntarios(){
		
		$lista = $this->ListaProyectos->getListaProyectosVoluntarios();
		$iterator = $lista->getIterator();

		while($iterator->valid()) {
			$nombre =  $iterator->current()->getNombre();
			$imagen = $iterator->current()->getImagen();
			$id = $iterator->current()->getIdProyecto();
			  	 $html = <<<EOS
  				<div class="contenidoVoluntarios">
				  		<h1> $nombre </h1>
						<div class="imgDonaciones">
				  			<img src="$imagen" />
				  		</div>
				  		<form name="vista" action="includes/formMuestraProyectoVoluntario.php" method="POST">
				  				<input type="hidden" name="idProyecto" id="proyecto" value="$id" /> 
				  				<input name="button" type="submit" value="INFORMACION" />
				  		</form>
			  		</div> 
EOS;
			echo $html;  		
		    $iterator->next();
		}		 	
	}

	function muestraProyecto($id){

		$proyecto = $this->ListaProyectos->getProyecto($id);
		$nombre = $proyecto->getNombre();
		$fecha = $proyecto->getFechaCreacion();
		$numVoluntarios =  $proyecto->getNumVoluntarios();
		$imagen = $proyecto->getImagen();
		$descripcion = $proyecto->getDescripcionLarga();
		#$idUsuario = $_SESSION['usuario'];
		$idUsuario = "";
		if (isset($_SESSION['login']) && $_SESSION['login'])
			$idUsuario = $_SESSION['DNI'];
		$html = <<<EOS
		<h1> $nombre </h1>
		<div class="imgDonacion">
			<img src="$imagen" />
		</div>
		<div class="cajaDescripcion">
		<p> $descripcion </p>
		</div>
		<div class='proyectoFechas'>Fecha: $fecha </div>	
		<div class='proyectoVoluntario'>Voluntarios necesarios: $numVoluntarios </div>
		<p><div class="proyectoApuntame"><form name="vista" action="includes/formApuntameVoluntario.php" method="POST">
				<input type="hidden" name="idProyecto" id="proyecto" value="$id" /> 
				<input type="hidden" name="idUsuario" id="usuario" value="$idUsuario" /> 
				<input name="button" type="submit" value="APUNTAME" /></div></p>
		</form>
EOS;
		echo $html;
	}

	function muestraProyectosDonar(){

		$lista = $this->ListaProyectos->getListaProyectosVoluntarios();
		$iterator = $lista->getIterator();

		while($iterator->valid()) {
		  		$nombre =  $iterator->current()->getNombre();
			$imagen = $iterator->current()->getImagen();
			$id = $iterator->current()->getIdProyecto();
			$dineroAcumulado =  $iterator->current()->getDineroAcumulado();
			  	 $html = <<<EOS
  				<div class="contenidoVoluntarios">
				  		<h1> $nombre </h1>
						<div class="imgDonaciones">
				  			<img src="$imagen" />
				  		</div>
				  		<form name="vista" action="includes/formMuestraProyectoDonar.php" method="POST">
				  				<input type="hidden" name="idProyecto" id="proyecto" value="$id" /> 
				  				<input type="hidden" name="dineroAcumulado" id="dinero" value="$dineroAcumulado" /> 
				  				<input name="button" type="submit" value="INFORMACION" />
				  		</form>
			  		</div> 
EOS;
			echo $html;  	
		    $iterator->next();
		}
			 	
	}

	function muestraProyectosConVoluntarios(){
		$lista = $this->ListaProyectos->getListaProyectosVoluntarios();
		$iterator= $lista->getIterator();
		while($iterator->valid()) {
			$numVoluntarios = $iterator->current()->getNumVoluntarios();
			$nombre =  $iterator->current()->getNombre();
			$id = $iterator->current()->getIdProyecto();
		  	if($numVoluntarios>0){
		  		$html = <<<EOS
		  			<div class="noticiaAdmin">
				  		<h3> $nombre </h3>
				  		<form name="vista" action="includes/formAdminMuestraVoluntariosProyecto.php" method="POST">
				  				<input type="hidden" name="idProyecto" id="proyecto" value="$id" /> 
				  				<input name="button" type="submit" value="Ver voluntarios"/>
				  		</form>
			  		</div> 
EOS;
			echo $html;  
		  	}
		  	
			  	
		    $iterator->next();
		}

	}
	function muestraProyectosVoluntariosAdmin(){
		
		$lista = $this->ListaProyectos->getListaProyectosVoluntarios();
		$iterator = $lista->getIterator();
		$num = 0;
		while($iterator->valid()) {
			$nombre =  $iterator->current()->getNombre();
			$imagen = $iterator->current()->getImagen();
			$id = $iterator->current()->getIdProyecto();
			  	 $html = <<<EOS
			  	 	<div class="proyectoAdmin" id="proyectoAdmin$num">
				  		<h3> $nombre </h3>
				  		<form name="vista" action="vistaModificaProyecto.php?id=$id" method="POST">
				  				<input type="hidden" name="idProyecto" id="proyecto" value="$id" /> 
				  				<input name="button" type="submit" value="modificar" />
				  		</form>
				  				<button onclick="eliminaProyecto($num,$id)" name="button" type="none" value="eliminar">Eliminar</button>
			  		</div> 
EOS;
			echo $html; 
			$num++; 		
		    $iterator->next();
		}		 	
	}
	
	function muestraYmodifica($id){
		$proyecto = $this->ListaProyectos->getProyecto($id);
		$nombre = $proyecto->getNombre();
		$fecha = $proyecto->getFechaFin();
		$numVoluntarios =  $proyecto->getNumVoluntarios();
		$imagen = $proyecto->getImagen();
		$dineroNecesario = $proyecto->getDineroNecesario();
		$descripcionCorta = $proyecto->getDescripcionCorta();
		$descripcionLarga = $proyecto->getDescripcionLarga();
		#$idUsuario = $_SESSION['usuario'];
		$idUsuario = "";
		if (isset($_SESSION['login']) && $_SESSION['login'])
			$idUsuario = $_SESSION['DNI'];
		$html = <<<EOS
		<form name="vista" action="includes/formModificaProyecto.php" method="POST">
		<input type="text" id="nombre" value="$nombre"  name="nombre"></input> </p>
		<div class="imgDonacion">
			<p> <h2>Imagen: </h2></p>
			<input id="file_url" type="file" value=$imagen id="imagen" name="imagen" ></input><img src='$imagen' />
		</div>
		<div class="cajaDescripcion">
			<p><h2> Descripción:</h2> </p>
			<textarea id="descripcionCorta" rows="4"  name="descripcionCorta" value= "$descripcionCorta" alt=$descripcionCorta></textarea>
		</div>
		<div class="cajaDescripcion">
			<p><h2> Descripción:</h2> </p>
			<textarea id="descripcionCorta" rows="8" name="descripcionLarga" value= "$descripcionLarga" alt=$descripcionLarga></textarea>
		</div>
		<div class='proyectoFechas'>
			<p> <h2>Fecha: </h2></p>
			<input type="date" size="20" name="fechaFin" id="fechaFin"  value:"$fecha"></input>
		</div>
		<div class='proyectoDinero'>
			<p> <h2>Dinero Necesario: </h2></p>
			<input type="numbre" size="20" name="dineroNecesario" value:"$dineroNecesario"></input>
		</div>
		<div class='proyectoVoluntario'>
			<p><h2>Voluntarios necesarios: </h2></p>
			<input type="number" value= "$numVoluntarios" name="numVoluntarios" id = "numVoluntarios"></input>
		</div>
		
		<p><div class="proyectoApuntame">
				<input type="hidden" name="idProyecto" id="idProyecto" value="$id" /> 
				<input name="button" type="submit" value="ACTUALIZAR" /></div></p>
		</form>
EOS;
		echo $html;
	}
}
?>