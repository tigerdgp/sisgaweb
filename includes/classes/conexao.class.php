<?php
    
    /*
    *
    *   Classe de conexão ao banco de dados MySQL
    *   @Autor - Dérik Gomide Padua
    *   @Data - 12/12/2013
    *   @Versão - 1.0
    *   @Última atualização - 12/12/2013
    *
    */

    class Conexao {
    
        private $host, $port, $db, $user, $pass, $dsn;
		
		public static $instance;
		
		// Método construtor da classe
        private function __construct() {
			$this->host = "localhost";
			$this->port = "3306";
			$this->db	= "sisgaweb";
			$this->user	= "root";
			$this->pass	= "senha";
			$this->dsn	= "mysql:host=".$this->host.";port=".$this->port.";dbname=".$db;
		}
		
		public static function getInstance() { 
			if (!isset(self::$instance)) { 
				self::$instance = new PDO($this->dsn, $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); 
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
				self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING); 
			} 
			return self::$instance; 
		}
    }

?>
