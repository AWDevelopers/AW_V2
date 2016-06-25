<?php
class noticia{
	private $id;
	private $titulo;
	private $tipo;
	private $descripcionCorta;
	private $descripcionLarga;
	private $fecha;
	private $imagen;
	
	/*Constructora de la clase por defecto*/
	function __construct($id, $titulo, $tipo, $descripcionCorta, $descripcionLarga, $fecha, $imagen){
			$this->id=$id;
			$this->titulo=$titulo;  
			$this->tipo=$tipo;
	   		$this->descripcionCorta=$descripcionCorta; 
			$this->descripcionLarga=$descripcionLarga; 
			$this->fecha=$fecha;
			$this->imagen=$imagen;
	}
	
	public function getId(){
            return $this->id;
        }
        
	public function getTitulo(){
		return $this->titulo;
	}
	
	public function getTipo(){
		return $this->tipo;
	}
	
	public function getDescripcionCorta(){
		return $this->descripcionCorta;
	}
	
	public function getDescripcionLarga(){
		return $this->descripcionLarga;
	}
	
	public function getFecha(){
		return $this->fecha;
	}
	
	public function getImagen(){
		return $this->imagen;
	}
	
	public function toJson(){
			return $json;
		}

	public function fromJson($json){
		return $proyecto;
	}
}
?>
