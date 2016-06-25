<?php
	require_once '/../DaoScripts/DaoNoticias.php';
	class GestorNoticias{
		private $dao;
		function __construct(){
			require_once '/../DaoScripts/DaoNoticias.php';
			$this->dao = new DaoNoticias();
		}
		public function getListaNoticias(){
			$lista = $this->dao->listaNoticias();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista)-1 ; $i++){
			$array->append(new noticia($lista[$i]['id'], $lista[$i]['titulo'],$lista[$i]['tipo'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen'],$lista[$i]['fecha']));
			}
			return $array;
		}
		public function getListaNoticiasPrimarias(){
			$lista = $this->dao->listaNoticiasPrimarias();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista)-1 ; $i++){
			$array->append(new noticia($lista[$i]['id'], $lista[$i]['titulo'],$lista[$i]['tipo'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'],$lista[$i]['fecha'], $lista[$i]['imagen']));
			}
			return $array;
		}
		
		public function getListaNoticiasSecundarias(){
			$lista = $this->dao->listaNoticiasSecundarias();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista)-1 ; $i++){
			$array->append(new noticia($lista[$i]['id'], $lista[$i]['titulo'], $lista[$i]['tipo'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen'],$lista[$i]['fecha']));
			}
			return $array;
		}
		
		public function getListaNoticiasTerciarias(){
			$lista = $this->dao->listaNoticiasTerciarias();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista)-1 ; $i++){
			$array->append(new noticia($lista[$i]['id'], $lista[$i]['titulo'], $lista[$i]['tipo'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen'],$lista[$i]['fecha']));
			}
			return $array;
		}
		
		public function getListaNoticiasOtras(){
			$lista = $this->dao->listaNoticiasOtras();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista)-1 ; $i++){
                            $array->append(new noticia($lista[$i]['id'], $lista[$i]['titulo'], $lista[$i]['tipo'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen'],$lista[$i]['fecha']));
			}
			return $array;
		}
		public function eliminaNoticia($id){
			$idN =  htmlspecialchars(trim(strip_tags($id)));
			$this->dao->eliminaNoticia($idN);
		}
		
		public function editaNoticia($id,$titulo, $tipo , $descripcionCorta, $descripcionLarga, $imagen){
			$idN =  htmlspecialchars(trim(strip_tags($id)));
			$tituloN =  htmlspecialchars(trim(strip_tags($titulo)));
			$tipoN = htmlspecialchars(trim(strip_tags($tipo)));
			$desC =  htmlspecialchars(trim(strip_tags($descripcionCorta)));
			$desL =  htmlspecialchars(trim(strip_tags($descripcionLarga)));
			$imagenN =  htmlspecialchars(trim(strip_tags($imagen)));
			$this->dao->editaNoticia($idN,$tituloN, $tipoN , $desC, $desL, $imagenN);
		}
		
		public function nuevaNoticia($titulo, $tipo , $descripcionCorta, $descripcionLarga,$imagen){
			$tituloN = htmlspecialchars(trim(strip_tags($titulo)));
			$tipoN = htmlspecialchars(trim(strip_tags($tipo)));
			$cortaN = htmlspecialchars(trim(strip_tags($descripcionCorta)));
			$largaN = htmlspecialchars(trim(strip_tags($descripcionLarga)));
			$imagenN = htmlspecialchars(trim(strip_tags($imagen)));
                        if(!$this->dao->existeNoticia($tituloN)){
                            return ($this->dao->insertaNoticia($tituloN,$tipoN,$cortaN, $largaN, $imagenN));
                        }
                        else{
                            return false;
                        }     
		}
                
        public function getNoticia($id){
			$idN =  htmlspecialchars(trim(strip_tags($id)));
			return ($this->dao->seleccionaNoticia($idN));
		}
	}
?>
