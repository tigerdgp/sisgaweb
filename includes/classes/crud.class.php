<?php  
        
    /*
	**************************************************************************
	*	Nome: 		crud.class.php
	*	Descrição: 	Classe CRUD - Select / Insert / Update / Delete
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		18/10/2015
	*	Versão: 	1.0
	*	Edição: 	-
	**************************************************************************
	*/

    class Crud {
		
		public static $instance;
		//public $var1, $var2, $var3;
		
		// Método construtor da classe
        private function __construct() { }
		
		public static function getInstance(){ 
			if (!isset(self::$instance)) 
			self::$instance = new Crud(); 
	
			return self::$instance; 
		}

        # MÉTODOS #
		/**
		 * Retornar o valor de um atributo
		 * - Key -> nome do atributo
		 */
		public function __get($key){
			if (property_exists($this, $key)) {
                return $this->$key;
            }
		}
		public function __set($key, $val){
			if (property_exists($this, $key)) {
				$this->$key = $val;
			}	
		}
		
		//Função para inserir dados em um banco utilizando transaction
        /*public function transaction($dbh, $sql, $param) {
			$query = $dbh->beginTransaction();
            $query = $dbh->prepare($sql);
            for ($i = 0; $i < count($param); ++$i) {
                $p = ":param". $i;
                $query->bindParam($p, $param[$i]);
            }            	
			$query->execute();
			return $query;
        }*/

        //Função para inserir dados em um banco utilizando parâmetros
        public function insert($dbh, $sql, $param) {
            $query = $dbh->prepare($sql);
            for ($i = 0; $i < count($param); ++$i) {
                $p = ":param". $i;
                $query->bindParam($p, $param[$i]);
            }            	
			$query->execute();
			return $query;
        }

        //Função para consulta que retorna vários registros em um array
        public function select($dbh, $sql) {
			$query = $dbh->query($sql);
            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                $array[] = $row;
            }
			return $array;
        }

        //Função para contar quantidade de registros
        public function count($dbh, $sql, $param) {
			$query = $dbh->query($sql);
            $row = $query->fetch(PDO::FETCH_ASSOC);
	        $var = $row[$param];
			return $var;
        }

        //Função para deletar / atualizar registros
        public function update($dbh, $sql, $param) {
			$query = $dbh->prepare($sql);
            for ($i = 0; $i < count($param); ++$i) {
                $p = ":param". $i;
                $query->bindParam($p, $param[$i]);
            }            	
			$query->execute();
            $row = $query->fetch(PDO::FETCH_ASSOC);
            if(count($row) == 1){
			    $u = TRUE;
		    }else{
			    $u = FALSE;
		    }
			return $u;
        }
    }
    
?>