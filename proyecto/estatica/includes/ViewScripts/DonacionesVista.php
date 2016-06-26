<?php
	
	use \AW\proyecto\estatica\includes\Aplicacion as App;

	class vistaDonaciones{
		private $ListaProyectos;

		function __construct(){
			require_once '/../ModelScripts/GestorProyectos.php';
			$this->ListaProyectos = new GestorProyectos();
		}

		function muestraDonacionesProyecto($id){

			$lista = $this->ListaProyectos->getProyecto($id);
			
			  	$nombre =  $lista->getNombre();
				$imagen = $lista->getImagen();
				$id = $lista->getIdProyecto();
				$dineroAcumulado =  $lista->getDineroAcumulado();
				$CIFOng = $lista->getCifOng();
				$dineroNecesario =  $lista->getDineroNecesario();
				$descLarga =  $lista->getDescripcionLarga();
				$descCorta = $lista->getDescripcionCorta();

	 			//$html = <<<EOS
				echo'	<div class="contenido">
				
						<div id= "tituloDonacionesVista">
						<h1><a href="perfilOng.php?ong='.$CIFOng.'">'.$nombre.'</a></h1>
						</div>
						
						<div class = "imgONG">
							<!--<p><img src="img/panda.png" width="600" /></p>-->
							<p><img src= "'.$imagen.'" /></p>
							<h4>'.$descCorta.'</h4>
							
							<!--<p>Aqui ira la descripcion de la ONG</p>-->
							<p>'.$descLarga.'</p>
						</div>
						<div id = "datos">
						<div id = "recaudado">
							
							<div id="recaudacion">Recaudacion: '.$dineroAcumulado .'euros   ----   Meta: '.$dineroNecesario .'euros</div>
							<div id = "barrainformativa">
								<p><progress value="'.$dineroAcumulado.'" max="'.$dineroNecesario.'"></progress></p>
							</div>
						</div>
						<div id = "datoscantidad">
							<div id= "cantidad"> Cantidad:</div>
								<form action="vistaDonacion.php" method="POST">
									<p><input type="text" name="cantidad">
									<input type="hidden" name="idProyect" value="'.$id.'">
									<input type= "submit" name ="donar" value = "Donar" size="20">
									</p>
								</form>
							</div>
						</div>
					</div>';
//EOS;
//				echo $html;  		
				
		}

		public function muestraInsertarDonacion($id, $dinero){

			//if(!(isset($_SESSION['login']) && $_SESSION['login'])){
			$app = App::getSingleton();
    		if($app->usuarioLogueado()){
				echo '<div class="contenidoPerfilUsuario">';
				echo '<form action="includes/formDonacion.php" method="POST">
					  <p>Dni:
					  <input type="text" name="dni" required></input></p>
					  <p>Proyecto(id):
					  <input type="text" name="pid" required value = "' . $id . '"></input></p>
					  <p>Tarjeta con la que realizar el pago:
					  <input type="text" name="tarjeta" required"></input></p>
					  <p>Cantidad a donar:
					  <input type="text" name="cantidad" required value="' . $dinero . '"></input></p>';
					  //<p><input type="submit" name="donacion" value="Hacer Donación"></input></p></form>';
				echo'<p><input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet."></p>';
				echo'<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">';
				echo '</form>';
				echo '</div>';
			}else{
				echo '<h2>Usuario no logueado !</h2>';
				echo '<p>Para realizar una donación debes estar <a href="registrate.php">registrado</a> o <a href="login.php">logueado</a>.</p>';
			}

			/*$app = App::getSingleton();
			if($app->usuarioLogueado()){
				$dniU = $app->dniUsuario();
				echo '<div class="formulario">';
				echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post">';
				//echo'<input type="hidden" name="dni" required value = "' . $dniU . '"></input>';
				//echo'<input type="hidden" name="pid" required value = "' . $id . '"></input>';
				//echo '<input type="hidden" name="cantidad" required value="' . $dinero . '"></input></p>';
				
				echo'<p>Proyecto(id):
					  <input type="text" name="pid" required value = "' . $id . '"></input></p>
					  <p>Cantidad a donar:
					  <input type="text" name="cantidad" required value="' . $dinero . '"></input></p>';
				echo '<input type="hidden" name="cmd" value="_ext-enter" />
					<input type="hidden" name="redirect_cmd" value="_xclick" />
					<input type="hidden" name="business" value="Incommong@gmail.com" />'; //Cuenta a la que va destinada el dinero
				echo '<input type="hidden" name="item_name" value="'.$id.'" />'; //nombre del producto
				echo '<input type="hidden" name="amount" value= "'.$dinero.'" />'; //Precio del producto
				echo '<input type="hidden" name="currency_code" value="EUR" />'; //tipo de moneda
				echo '<input type="hidden" name="return" value="donaciones.php?id="'.$id.'"">'; //pagina a la que vuelve al hacer la compra
				echo '<input type="hidden" name = "notify_url" value = "includes/formDonacion.php?pid="'.$id.'"&cantidad="'.$dinero.'""/>';
				echo'<p><input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet."></p>';
				echo'<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">';
				echo'</form>';
				echo '</div>';
			}else{
				echo '<h2>Usuario no logueado !</h2>';
				echo '<p>Para realizar una donación debes estar <a href="registrate.php">registrado</a> o <a href="login.php">logueado</a>.</p>';
			}*/
		}
	
	}

?>