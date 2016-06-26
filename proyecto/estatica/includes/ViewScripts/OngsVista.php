<?php

	use \AW\proyecto\estatica\includes\Aplicacion as App;

	class vistaOng{

		private $listaOngs;
		
		function  __construct(){
			require_once '/../ModelScripts/GestorOngs.php';
			$this->listaOngs = new GestorOngs();
		}
	
		public function cambiaTlf(){
			if(isset($_POST['cTelefono'])){
				$nueva=$_POST["telefono_actual"];
				$actual=$_POST["telefono_nuevo"];

				$lista = $this->listaOngs->modificaTelefono($actual, $nueva);
				header("Location: procesarModificacion.php");
			}
			
		}
	
		public function muestraModificarTelefono($telefono){

			echo '<div class="formulario">';
			echo '<form method="POST">
				  <p>Teléfono ACTUAL de la Ong
					<input type="text" name="telefono_actual" required value = "'. $telefono .'"></input></p>
				  <p>Teléfono NUEVO de la Ong
					<input type="text" name="telefono_nuevo" required></input></p>
				  <p><input type="submit" name="cTelefono" value="Modificar Teléfono"></p>
				  </form>';
			echo '</div>';
			$this->cambiaTlf();
			
		}
		
		public function cambiaNombre(){
			if(isset($_POST['cNombre'])){
				$actual=$_POST["nombre_actual"];
				$nuevo=$_POST["nombre_nuevo"];

				$lista = $this->listaOngs->modificaNombre($nuevo, $actual);
				header("Location: procesarModificacion.php");
			}
			
		}

		public function muestraModificarNombre($nombre){

			echo '<div class="formulario">';
			echo '<form method="POST">
				  <p>Nombre ACTUAL de la Ong
					<input type="text" name="nombre_actual" required value = "'. $nombre .'"></input></p>
				  <p>Nombre NUEVO de la Ong
					<input type="text" name="nombre_nuevo" required></input></p>
				  <p><input type="submit" name="cNombre" value="Modificar Nombre"></p>
				  </form>';
			echo '</div>';
			$this->cambiaNombre();
		}


		public function cambiaEmail(){
			if(isset($_POST['cEmail'])){
				$actual=$_POST["email_actual"];
				$nuevo=$_POST["email_nuevo"];

				$lista = $this->listaOngs->modificaMail($nuevo, $actual);
				header("Location: procesarModificacion.php");
			}
			
		}

		public function muestraModificarEmail($email){

			echo '<div class="formulario">';
			echo '<form  method="POST">
				  <p>Email ACTUAL de la Ong
					<input type="text" name="email_actual" required value = "'. $email .'"></input></p>
				  <p>Email NUEVO de la Ong
					<input type="text" name="email_nuevo" required></input></p>
				  <p><input type="submit" name="cEmail" value="Modificar Email"></p>
				  </form>';
			echo '</div>';
			$this->cambiaEmail();
		}

		public function cambiaDireccion(){
			if(isset($_POST['cDir'])){
				$nuevo=$_POST["dir_nuevo"];
				$actual=$_POST["dir_actual"];

				$lista = $this->listaOngs->modificaDir($nuevo, $actual);
				header("Location: procesarModificacion.php");
			}
			
		}
		public function muestraModificarDireccionOng($dir){

			echo '<div class="formulario">';
			echo '<form  method="POST">
				  <p>Dirección ACTUAL de la Ong
					<input type="text" name="dir_actual" required value = "'. $dir .'"></input></p>
				  <p>Dirección NUEVO de la Ong
					<input type="text" name="dir_nuevo" required></input></p>
				  <p><input type="submit" name="cDir" value="Modificar Dirección"></p>
				  </form>';
			echo '</div>';
			$this->cambiaDireccion();
		}



		public function cambiaUsuario(){
			if(isset($_POST['cUsuario'])){
				$actual=$_POST["usuario_actual"];
				$nuevo=$_POST["usuario_nuevo"];

				$lista = $this->listaOngs->modificaUsuario($nuevo, $actual);
				header("Location: procesarModificacion.php");
			}
			
		}
		
		public function muestraModificarUsuario($usuario){

			echo '<div class="formulario">';
			echo '<form  method="POST">
				  <p>Usuario ACTUAL de la Ong
					<input type="text" name="usuario_actual" required value = "'. $usuario .'"></input></p>
				  <p>Usuario NUEVO de la Ong
					<input type="text" name="usuario_nuevo" required></input></p>
				  <p><input type="submit" name="cUsuario" value="Modificar Usuario"></p>
				  </form>';
			echo '</div>';
			$this->cambiaUsuario();
		}

		public function cambiaPass(){
			if(isset($_POST['cPass'])){
				$actual=$_POST["pass_actual"];
				$nuevo=$_POST["pass_nuevo"];

				$lista = $this->listaOngs->modificaPass($nuevo, $actual);
				header("Location: procesarModificacion.php");
			}
			
		}
		

		public function muestraModificarPass(){

			echo '<div class="formulario">';
			echo '<form  method="POST">
				  <p>Contraseña ACTUAL de la Ong
					<input type="text" name="pass_actual" required></input></p>
				  <p>Contarseña NUEVO de la Ong
					<input type="text" name="pass_nuevo" required></input></p>
				  <p><input type="submit" name="cPass" value="Modificar Contraseña"></p>
				  </form>';
			echo '</div>';
			$this->cambiaPass();
		}

		public function eliminaOng(){
			if(isset($_POST['delete'])){
				$CIF=$_POST['cif'];
				$lista = $this->listaOngs->deleteOng($CIF);
				header("Location: procesarBorrado.php");
			}
		}
		
		public function muestraEliminarOng(){

			echo '<div class="formulario">';
			echo '<form method="POST">
				  <p>Cif de la Ong que quiere eliminar</p>
				  <p><input type="text" name="cif" required></input></p>
				  <input type="submit" name="delete" value="Dar de baja Ong">
				  </p>
				  </form>';
			echo '</div>';
			$this->eliminaOng();
		}
		

		public function eliminarOng($CIF){
			$lista = $this->listaOngs->deleteOng($CIF);
		}

		public function insertarOng(){
			if(isset($_POST['add'])){
				$cif=$_POST["CIF"];
				$nombre=$_POST["nombre"];
				$dir=$_POST["direccion"];
				$mail=$_POST["email"];
				$user=$_POST["usuario"];
				$pass=$_POST["pass"];
				$tlf=$_POST["telefono"];
				
				
				$lista = $this->listaOngs->addOng($cif, $nombre, $dir, $mail, $user, $pass, $tlf);
				header("Location: procesarInsertar.php");
			}
			
		}
		public function muestraInsertarOng(){

			echo '<div class="formulario">';
			echo '<form action=includes/formAniadirOng.php method="POST">
					<div class="contenido2">
					<div id="formulariosTitulo"><p><h1> Formulario para una nueva ONG</h1></p></div>
				  <p><h2>CIF de la Ong</h2></p>
				  	<input type="text" name="CIF" required> *</input>
				  <p><h2>Nombre de la Ong</h2></p>
				  	<input type="text" name="nombre" required> *</input>
				  <p><h2>Dirección</h2></p>
				  	<input type="text" name="direccion"> *</input> 
				  <p><h2>Email de contacto</h2></p>
					<input type="text" name="email" required> *</input>
				  <p><h2>Usuario</h2></p>
					<input type="text" name="usuario" required> *</input>
				  <p><h2>Contraseña</h2></p>
					<input type="password" name="pass" required> *</input>
					<p> <h2>Imagen: </h2></p>
						<input id="file_url" type="file" name="foto" required> (*)</input>
				  <p><h2>Teléfono de contacto</h2></p>
					<input type="text" name="telefono"></input>
				  <p><input type="submit" name="add" value="Dar de alta Ong"/></p>
				  </div>
				  <div>
				  </form>
				  </div>';
			echo '</div>';
			//$this->insertarOng();
		}

		public function muestraPerfilOng($ong){

			$lista = $this->listaOngs->seleccionaOng($ong);
			$nombre=$lista->getNombre();
			$cif=$lista->getCif();
			$dir=$lista->getDireccion();
			$email=$lista->getEmail();
			$user=$lista->getUsuario();
			$tlf=$lista->getTelefono();

			$imagen= $lista->getImagen();
			echo '<div id= "contenido">';
			echo '<div id="datosOng">';
				echo '<p><strong>Nombre de la Ong:</strong>' . $nombre;
				//if((isset($_SESSION['login'])&& $_SESSION['usuario'] == $user)){
				$app = App::getSingleton();
    			if($app->usuarioLogueado() && $app->nombreUsuario()==$user){
					echo ' ----- <a href="vistaModificarNombreOng.php?data='. $nombre . '"> Modificar </a></p>';
				}
				echo '<p><strong>CIF de la Ong:</strong>' . $cif;
				
				echo '<p><strong>Dirección de la Ong:</strong>' . $dir;
				//if((isset($_SESSION['login'])&& $_SESSION['usuario'] == $user)){
				if($app->usuarioLogueado() && $app->nombreUsuario()==$user){
					echo ' ----- <a href="vistaModificarDireccionOng.php?data='. $dir . '"> Modificar </a></p>';
				}
				echo '<p><strong>Email de la Ong:</strong>' . $email;
				//if((isset($_SESSION['login'])&& $_SESSION['usuario'] == $user)){
				if($app->usuarioLogueado() && $app->nombreUsuario()==$user){
					echo ' ----- <a href="vistaModificarEmailOng.php?data='. $email . '"> Modificar </a></p>';
				}
				echo '<p><strong>Teléfono de la Ong:</strong>' . $tlf;
				//if((isset($_SESSION['login'])&& $_SESSION['usuario'] == $user)){
				if($app->usuarioLogueado() && $app->nombreUsuario()==$user){
					echo ' ----- <a href="vistaModificarTelefonoOng.php?data='. $tlf . '"> Modificar </a></p>';
				}
				//if((isset($_SESSION['login'])&&$_SESSION['usuario'] == $user)){
				if($app->usuarioLogueado() && $app->nombreUsuario()==$user){
					echo '<p><strong>Usuario de la Ong: </strong>' . $user . ' ----- <a href="vistaModificarUsuarioOng.php?data='. $user . '">    Modificar </a></p> ';
					echo '<p><strong>Contraseña de la Ong: </strong> ************ ----- <a href="vistaModificarPassOng.php?data='. $cif . '">    Modificar </a></p> ';
				}
					echo '<form action="vistaEliminarOng.php?CIF='.$cif.'" method="POST">
      				<input type="hidden" name="CIF" value="$cif"><input type ="submit" name="eliminar" value="Eliminar Ong" size="30"></form>';
				//}
				echo '<div id = "imagenDonacion">

  				<p><img src="'.$imagen.'" /></p>
  				</div>';
  				echo '</div>';	
			echo '</div>';
		}

		public function muestraOngs(){
			$lista = $this->listaOngs->getLista();
            $iterator = $lista->getIterator();
               		
			while($iterator->valid()) {
                $nombre = $iterator->current()->getNombre();
                $imagen = $iterator->current()->getImagen();
                $cif = $iterator->current()->getCif();
                echo'<div class="principal">
	                    <h2>'. $nombre .'</h2>
	                    <img src="'.$imagen.'"/>
	                    <form name="vista" action="perfilOng.php?ong='.$cif.'" method="POST">
	                    <input type="submit" name="submit" value="Visitar Perfil" />
	                    </form>
                    </div>';
 		
		    $iterator->next();
			}	 	
		}
	}

?>