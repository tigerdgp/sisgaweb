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

    class Conexao extends PDO {
    
        private $host       = $config['db']['host'];
        private $database   = $config['db']['banco'];
        private $usuario    = $config['db']['user'];
        private $senha      = $config['db']['pass'];
        private $dsn        = "mysql:dbhost="+$host+";dbnome="+$database;

        public static $status = "Não conectou...";

        // Método construtor da classe
        public function __construct() {}

        // Método desconstrutor da classe
        public function __destruct() {
            fechaConexao();
        }

        // Método de conexao ao banco
        public getConexao() {
            parent::__construct();
            $conexao = new PDO($dsn, $usuario, $senha, array());
        }

        // Método que retorna o status da conexão
        public static getStatus() {
            return $status;
        }

        // Método para fechar a conexão
        public fechaConexao() {
            $this->conexao
        }
    }

?>