<?php

	class PojoNews {
		private $id_noticia;
		private $titulo;
		private $texto;
		private $autor;
		private $data;
		
		public function getId_noticia() { 
			return $this->id_noticia; 
		} 
		public function setId_noticia($id_noticia) { 
			$this->id_noticia = $id_noticia; 
		}
		public function getTitulo() { 
			return $this->titulo; 
		} 
		public function setTitulo($titulo) { 
			$this->titulo = $titulo; 
		}
		public function getTexto() { 
			return $this->texto; 
		} 
		public function setTexto($texto) { 
			$this->texto = $texto; 
		}
		public function getAutor() { 
			return $this->autor; 
		} 
		public function setAutor($autor) { 
			$this->autor = $autor; 
		}
		public function getData() { 
			return $this->data; 
		} 
		public function setData($data) { 
			$this->data = $data; 
		}
	}

?>