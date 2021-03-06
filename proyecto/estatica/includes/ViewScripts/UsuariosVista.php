﻿<?php
	
	class UsuariosVista{
		
		private $ListaUsuarios;
		function __construct(){
			require_once '/../ModelScripts/GestorUsuarios.php';
			require_once '/../ModelScripts/GestorVoluntarios.php';
			$this->ListaUsuarios = new GestorUsuarios();
		}
		
		
										
					
function muestraUsuarios(){
		$dni= $_SESSION['DNI'];
		$lista = $this->ListaUsuarios->getListaUsuarios($dni);
		$iterator = $lista->getIterator();
		$num=0;
		while($iterator->valid()) {
			$nombre =  $iterator->current()->getNombre();
			$apellidos = $iterator->current()->getApellidos();
			$user = $iterator->current()->getUsuario();
			$email = $iterator->current()->getEmail();
			$DNI = $iterator->current()->getDNI();
			$direccion = $iterator->current()->getDireccion();
			$cp = $iterator->current()->getCP();
			$fechaNacimiento=  $iterator->current()->getFechaNacimiento();
			$avatar=  $iterator->current()->getAvatar();
			$telefono =  $iterator->current()->getTelefono();
			$sexo =  $iterator->current()->getSexo();
			$tipo =  $iterator->current()->getRol();
			  	 $html = <<<EOS
  				<div class="noticiaAdmin" id="usuarioAdmin$num">
				  		<p>Nombre: $nombre </p>
						<p>Apellidos : $apellidos </p>
						<p>DNI : $DNI </p>
						<p>Email: $email </p>
						<p>Usuario: $user </p>
				  		<form name="vista" action="vistaModificarUsuario.php" method="POST">
				  				<input type="hidden" name="DNI" id="usuario" value="$DNI" /> 
								<input type="hidden" name="nombre" value="$nombre" />
								<input type="hidden" name="apellidos"  value="$apellidos" />
								<input type="hidden" name="usuario"  value="$user" />
								<input type="hidden" name="email" value="$email" />
								<input type="hidden" name="direccion" value="$direccion" />
								<input type="hidden" name="cp" value="$cp" />
								<input type="hidden" name="fechaNacimiento" value="$fechaNacimiento" />
								<input type="hidden" name="avatar" value="$avatar" />
								<input type="hidden" name="telefono" value="$telefono" />
								<input type="hidden" name="sexo" value="$sexo" />
								<input type="hidden" name="tipo" value="$tipo" />			
				  				<input name="button" type="submit" value="Modificar"></input>
						</form>
						
							<form action = "includes/formEliminaUsuario.php" method = "POST" >
								<input type = "hidden" name= "DNI" value = "$DNI">
								<input type = "submit" value = "eliminar">
							</form>
				  			
				  		
			  		</div> 
EOS;
			echo $html;  		
		    $iterator->next();
			$num++;
		}		 	
	}
	function perfilUsuario($dni){
		$datosUsuario = $this->ListaUsuarios->getUsuario($dni);
		$gestorV = new GestorVoluntarios();
		$horas = $gestorV->getSumHorasVoluntariado($dni);
		$nombre = $datosUsuario->getNombre();
		$apellidos =$datosUsuario->getApellidos();
		$user = $datosUsuario->getUsuario();
		$email =  $datosUsuario->getEmail();
		$DNI = $datosUsuario->getDNI();
		$telefono = $datosUsuario->getTelefono();
		$avatar = $datosUsuario->getAvatar();
		$html = <<<EOS
		
  			<div class="cabeceraPerfil">
				
				
				<div id="fotoUsuario">
					<img src="$avatar" alt="avatar" width="200" height="200">	
				</div>
				
			</div>
		<div id= "contenidoPerfilUsuario">
			<div id ="datosUsuario" >
				<p><h2>Datos personales:</h2></p>
				
						<p>Nombre : $nombre</p>
						<p>Apellidos : $apellidos</p>
						<p>Email : $email</p>
						<p>DNI : $DNI</p>
						<p>Telefono : $telefono</p>
				
			</div>
		</div>
		<div id= "contenidoPerfilUsuario">
			<form action="includes/formModificarPass.php" method="POST">
				<div id="datosUsuario">
					<p><h2>Cambiar contraseña</h2></p>
					<form>
						<p>Nueva contraseña (min 6 caracteres): </p>
						<p><input type="password" name="pass1" required> (*)</input></p>
						<p>Repetir contraseña (min 6 caracteres): </p>
						<p><input type="password" name="pass2" required> (*)</input></p>
						<p><input type="hidden" name="id" id="usuario" value="$DNI" /> </p>
						<p><input type="submit" value="Confirmar"></input></p>
  					</form>
				</div>
			</form>
		</div>
		
		<div id= "contenidoPerfilUsuario">
			<div id ="datosUsuario">
				<p><h2>Bolsa de horas: </h2></p>
				<p>Horas acumuladas: $horas</p>
			</div>
		</div>
		<div id= "contenidoPerfilUsuario">
			<form action="includes/formModificarCamposUsuario.php" method="POST">
			<div id= "datosUsuario">
				<p><h2>Editar datos del usuario: </h2></p>
				<form >
					<p>Nombre:</p>
					<p><input type ="text" name ="nombre" value="$nombre" required/></p>
					<p>Apellidos:</p>
					<p><input type ="text" name ="apellidos" value="$apellidos" required/></p>
					<p>E-mail: </p>
					<p><input type ="email" name ="email" value="$email" required></p>
					<p>Teléfono : </p>
					<p><input type ="text" name ="telefono" value="$telefono" required></p>
					<p><input type="hidden" name="id" id="usuario" value="$DNI" /> </p>
					<p><input type ="submit" value="Editar"></input></p>
				</form>
			</div>
			</form>
		</div>
			<div id= "contenidoPerfilUsuario">
				<div id ="datosUsuario">
				<form action="includes/formEliminarPropiaCuenta.php" method="POST">
					<input type="hidden" name="id" id="usuario" value="$DNI" /> 
				<p><input type ="submit" value="Eliminar cuenta"></input></p>
				</form>
				</div>
			</div>
		</div> 
		</div>
EOS;
			echo $html; 
	}

	
}
?>