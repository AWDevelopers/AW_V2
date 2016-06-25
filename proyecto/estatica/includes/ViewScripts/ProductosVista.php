<?php

use \AW\proyecto\estatica\includes\Aplicacion as App;

	class vistaProductos{
		
		private $ListaProductos;

		function __construct(){
			require_once '/../ModelScripts/GestorProductos.php';
			$this->ListaProductos = new GestorProductos();
		}
			
		function muestraProductos(){
		

			if(isset($_POST['desc'])){

				$lista = $this->ListaProductos->cargarDatosProductoPorPrecioMayor();
			}else if(isset($_POST['asc'])){
			
				$lista = $this->ListaProductos->cargarDatosProductoPorPrecioMenor();
			
			}else{
				$lista = $this->ListaProductos->cargarDatosProductoPorNombre();
			}
			
			$iterator = $lista->getIterator(); 

			while($iterator->valid()) {
			  		echo "<div class='producto'> ";
				  		echo "<h1>" . $iterator->current()->getNombreProducto() . "</h1>";
				  			echo '<h3>'.$this->ListaProductos->cargarNombreONG( $iterator->current()->getCifONGProducto()).'</h3>';
				  		
				  		//MOSTRAR PRODUCTO
				  		echo '<form name="muestra" action="includes/formProductos.php" method="POST">
			  				<input  type = "hidden" name="idProducto" id="producto" value="'.$iterator->current()->getIdProducto().'"> 
			  				<input type="image" id = "imagenProducto" name = "producto" value="MUESTRA" src="'.$iterator->current()->getImagen().'" alt = "submit">';
			  			echo' </form>';

			  			$app = App::getSingleton();
						if($app->usuarioLogueado()){
			  				if($iterator->current()->getstockProducto() >0){
				  				echo'<form action="https://www.paypal.com/cgi-bin/webscr" method="post">';
				  					echo'<input  type = "hidden" name="idProducto" id="producto" value="'. $iterator->current()->getIdProducto() .'"> ';
					  				echo "<p> Unidades:  </p>";
					  				echo "<select id='unidades' name ='quantity'>";
						  				for($i =1; $i <= $iterator->current()->getstockProducto(); $i++){
						  					echo "<option value = '".$i."'>".$i."</option>";	
						  				}
						  			echo "</select>";

						 			echo "<h3>Precio: ". $iterator->current()->getPrecioProducto() ."€ </h3>";  		
						  			echo '<input type="hidden" name="cmd" value="_ext-enter" />
									<input type="hidden" name="redirect_cmd" value="_xclick" />
									<input type="hidden" name="business" value="Incommong@gmail.com" />'; //Cuenta a la que va destinada el dinero
									echo '<input type="hidden" name="notify_url" value="includes/formCompra.php" />';
									echo '<input type="hidden" name="item_name" value="'. $iterator->current()->getNombreProducto() .'" />'; //nombre del producto
									echo '<input type="hidden" name="amount" value= "'. $iterator->current()->getPrecioProducto() .'" />'; //Precio del producto
									echo '<input type="hidden" name="currency_code" value="EUR" />'; //tipo de moneda
									echo '<input type="hidden" name = "notify_url" value = "includes/formCompra.php"/>';
									echo '<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_buynow_LG.gif" border="0" name="pepito" value = "pepito" alt="PayPal. La forma rápida y segura de pagar en Internet.">';
						  		echo'</form>';	 

					  		} else{
					  			echo '<p>Agotado</p>';
					  		}		
				  		}else{
				  			echo ' <p><a href="registrate.php">Registrate</a> o <a href="login.php">inicia sesión</a> para comprar.</p>';
				  		}
				  	echo "</div>";
			    $iterator->next();
			}				 	
		}


		function muestraProducto($id){
			$producto = $this->ListaProductos->getProducto($id);
			
			echo '<div class="columnaIzda">';
				echo "<h1>".$producto->getNombreProducto()."</h1>";
				echo '<img src="'.$producto->getImagen().'"/>';
				echo '<h1>'.$this->ListaProductos->cargarNombreONG($producto->getCifONGProducto()).'</h1>';
				
				echo '<h3>'.$producto->getDescCortaProducto() .'</h3>';
				echo '<p>'.$producto->getDescLargaProducto() .'</p>';	
			echo '</div>';
				
				echo '<div class="columnaDcha">';
			
					
					echo '<h3>Precio: '.$producto->getPrecioProducto().'€</h3>';
					echo '<p>Num.Unidades'.$producto->getStockProducto().'</p>';
					$this->muestraCompra($id);
	
				echo '</div>';		

		}

		
		function muestraCompra($id){

			$producto = $this->ListaProductos->getProducto($id);
			$app = App::getSingleton();

			if($app->usuarioLogueado()){
				if($producto->getStockProducto() >0){
					echo'<form action="https://www.paypal.com/cgi-bin/webscr" method="post">';
			
					echo'<input  type = "hidden" name="idProducto" id="producto" value="'.$producto->getIdProducto().'"> ';
					echo "<input type='hidden' name = 'nombreProducto' value = '".$producto->getNombreProducto()."'>";
					echo "<input type='hidden' name = 'CIFOng' value = '".$producto->getCifONGProducto()."'>";

					echo "<input type='hidden' name = 'precioProducto' value = '".$producto->getPrecioProducto()."'>";
						echo '<select name= "quantity">';

							for($i =1; $i <= $producto->getstockProducto(); $i++){
				  				echo "<option value = '".$i."'>".$i."</option>";	
				  			}
				  		
						echo '</select>';
						
					
						echo '<input type="hidden" name="cmd" value="_ext-enter" />
						<input type="hidden" name="redirect_cmd" value="_xclick" />
						<input type="hidden" name="business" value="Incommong@gmail.com" />'; //Cuenta a la que va destinada el dinero

						echo '<input type="hidden" name="item_name" value="'.$producto->getNombreProducto().'" />'; //nombre del producto
						echo '<input type="hidden" name="amount" value= "'.$producto->getPrecioProducto().'" />'; //Precio del producto
						echo '<input type="hidden" name="currency_code" value="EUR" />'; //tipo de moneda
						echo'<input type="hidden" name="return" value="tienda.php">'; //pagina a la que vuelve al hacer la compra
						//echo '<input type="hidden" name="notify_url" value="http://www.nutecoweb.com/ok.php" />'; //procesar compra en bbdd
						echo '<input type="hidden" name = "notify_url" value = "includes/formCompra.php"/>';
						echo '<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_buynow_LG.gif" border="0" name="pepito" value = "pepito" alt="PayPal. La forma rápida y segura de pagar en Internet.">';
					echo '</form>';

				} else{
		  			echo '<p>Agotado</p>';
		  		}	
					
			}else{
	  			echo ' <p><a href="registrate.php">Registrate</a> o <a href="login.php">inicia sesión</a> para comprar.</p>';
	  		}
	  	
		}

		function eligeBorrarProducto(){
			$lista = $this->ListaProductos->cargarDatosProductoPorNombre();
			
			$iterator = $lista->getIterator(); 

			while($iterator->valid()) {
			  		echo "<div class='producto'> ";
				  		echo "<h1>" . $iterator->current()->getNombreProducto() . "</h1>";
				  		//echo "<h3>".$iterator->current()->getNombreONGProducto()."</h3>";
				  		
				  		//MOSTRAR PRODUCTO
				  		echo '<form name = "borraProducto" action = "includes/formProductos.php" method = "POST">
				  			<input  type = "hidden" name="idProducto" id="producto" value="'.$producto->getIdProducto().'"> 
			  				<input type="image" id = "imagenProducto" name = "producto" value="MUESTRA" src="'.$iterator->current()->getImagen().'" alt = "submit">';

			  				echo "<p> Unidades:  </p>";
			  				echo "<select id='unidades' name ='unidades'>";
				  				for($i =1; $i <= $iterator->current()->getstockProducto(); $i++){
				  					echo "<option value = '".$i."'>".$i."</option>";	
				  				}
				  			echo "</select>";

		  					echo ' <INPUT type="radio" name="elijoEste" value="'.$iterator->current()->getIdProducto().'">';		
										  			
				  	echo "</div>";
			    $iterator->next();
			}			
			echo '<input type = "submit" name = "producto" value = "BORRAR" >';
			echo '</form>';
								 	
		}

		
		function eligeModificarProducto(){
			$lista = $this->ListaProductos->cargarDatosProductoPorNombre();
			
			$iterator = $lista->getIterator(); 

			while($iterator->valid()) {
			  		echo "<div class='producto'> ";
				  		echo "<h1>" . $iterator->current()->getNombreProducto() . "</h1>";
				  		//echo "<h3>".$iterator->current()->getNombreONGProducto()."</h3>";
				  		
				  		echo '<form name = "borraProducto" action = "includes/formProductos.php" method = "POST">
			  				<input type="image" id = "imagenProducto" name = "producto" value="MUESTRA" src="'.$iterator->current()->getImagen().'" alt = "submit">';

			  				echo "<p> Unidades:  </p>";
			  				echo "<select id='unidades' name ='unidades'>";
				  				for($i =1; $i <= $iterator->current()->getstockProducto(); $i++){
				  					echo "<option value = '".$i."'>".$i."</option>";	
				  				}
				  			echo "</select>";

		  					echo ' <INPUT type="radio" name="elijoEste" value="'.$iterator->current()->getIdProducto().'">';		
										  			
				  	echo "</div>";
			    $iterator->next();
			}			
			echo '<input type = "submit" name = "producto" value = "ELEGIRMODIFICAR" >';
			echo '</form>';
								 	
		}

		function muestraModificarProducto($id){
			$producto = $this->ListaProductos->getProducto($id);
			$app = App::getSingleton();
    		
    		$user = $producto->getCifONGProducto();
    		echo '<p><img src="'.$producto->getImagen().'" /></p>';

    		if($app->usuarioLogueado()){
    				echo '<form method = "POST" action = "includes/formModificaProducto.php">';
						echo '<p>Nombre del producto: </p>';
						echo '<input type = "hidden" name = "idProducto" value = "'.$producto->getIdProducto().'">';
						echo ' <input type = "text" name= "NOMBRE" value ="'.$producto->getNombreProducto().'"> ';
						echo '<p>Precio del producto:</p>';
						echo '  <input type = "text"  name= "PRECIO" value ="'.$producto->getPrecioProducto().'"> ';
						echo '<p>Descripción corta del producto: </p>';
						echo '  <textarea name= "DCORTA" rows="4" cols="40">'.$producto->getDescCortaProducto().'</textarea> ';
						echo '<p>Descripción larga del producto: </p>';
						echo '  <textarea  rows="10" cols="40" name= "DLARGA">'.$producto->getDescLargaProducto().'</textarea> ';
						echo '<p>Stock </p>';
						echo '  <input type = "text" name= "STOCK" value ="'.$producto->getstockProducto().'">';
						echo ' <input type= "submit" value = "MODIFICAR"></p>';
				echo '</form>';
    			
    		}else{
    			echo ' <p>Debes estar <a href="registrate.php">registrado</a> o en tu <a href="login.php">cuenta de usuario</a> para modificar.</p>';
    		}
	
			echo '<form action="panelAdmin.php"><input type="submit" value="Atras"></input></form>';
		}

		public function muestraProds(){
			$lista = $this->ListaProductos->cargarDatosProductoPorNombre();
            $iterator = $lista->getIterator();
               		
			while($iterator->valid()) {
                $nombre = $iterator->current()->getNombreProducto();
                $imagen = $iterator->current()->getImagen();
                $stock = $iterator->current()->getstockProducto();
                echo'<div class="principal">
	                    <h2>'. $nombre .'</h2>
	                    <img src="'.$imagen.'"/>
                    </div>';
 		
		    $iterator->next();
			}	 	
		}

		public function muestraInsertarProd(){
			require_once '/../ModelScripts/GestorOngs.php';
			$listaOngs = new GestorOngs();

			$lista = $listaOngs->getLista();
            $iterator = $lista->getIterator();
			

              	echo'
          		<form action="includes/formInsertarProducto.php" method="POST">
				  <p>Nombre del producto
				  	<input type="text" name="NOMBRE" required></input></p>

				  <p>Cif
					<select name = "CIF">';
						
						while($iterator->valid()) {
							
							echo "<option value=".$iterator->current()->getCif().">".$iterator->current()->getCif()."</option>";
							  $iterator->next();
						}

				echo '
					</select>
				<p>Precio
			  	
			  		<input type="text" name="PRECIO"></input> </p>
				  <p>Descripción corta
					<input type="text" name="DCORTA" required></input></p>
				  <p>Descripción larga
					<input type="text" name="DLARGA" required></input></p>
				  <p>Número de unidades
					<input type="text" name="STOCK" required></input></p>
				  <p>Imagen
				  <input id="file_url" type="file" name="IMAGEN"> (*)</input>
				  <p><input type="submit" ></p>
				  </form>';

		}	 	
		
		
	}
?>

