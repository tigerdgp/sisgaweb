<?php

	class Sair {
		public static $instance;
		
		private function __construct() {}
		
		public static function getInstance(){ 
			if (!isset(self::$instance)) 
			self::$instance = new Sair(); 
	
			return self::$instance; 
		}
		
		public function logout(){
			session_destroy();
			header("Location: ?home");			
		}
	}

?>