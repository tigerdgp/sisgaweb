<?php 
	require_once "includes/classes/conexao.class.php";
	require_once "includes/classes/gera_log.class.php";
	require_once "includes/classes/pojo_news.class.php"; 
	
	class DaoNews { 
		public static $instance; 
		
		private function __construct() { 
			// 
		} 
		public static function getInstance() { 
			if (!isset(self::$instance)) self::$instance = new DaoNews(); 
			return self::$instance; 
		} 
		/*public function Inserir(PojoNews $news) { 
			try { 
				$sql = "INSERT INTO noticias (titulo, texto, autor, data) VALUES (:titulo, :texto, :autor, :data)";
				$p_sql = Conexao::getInstance()->prepare($sql); 
				$p_sql->bindValue(":titulo", $news->getTitulo()); 
				$p_sql->bindValue(":texto", $news->getTexto()); 
				$p_sql->bindValue(":autor", $news->getAutor());
				$p_sql->bindValue(":data", $news->getData());
				
				return $p_sql->execute(); 
			} 
			catch (Exception $e) { 
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
				GeraLog::getInstance()->inserirLog("Erro: Código: " . $e-> getCode() . " Mensagem: " . $e->getMessage());
			} 
		}
		public function Editar(PojoNews $usuario) { 
			try { 
				$sql = "UPDATE usuarios set nome = :nome, usuario = :usuario, senha = :senha WHERE id_usuario = :id_usuario"; 
				$p_sql = Conexao::getInstance()->prepare($sql); 
				$p_sql->bindValue(":nome", $usuario->getNome()); 
				$p_sql->bindValue(":usuario", $usuario->getUsuario()); 
				$p_sql->bindValue(":senha", $usuario->getSenha());
				$p_sql->bindValue(":id_usuario", $usuario->getId_usuario()); 
				return $p_sql->execute(); 
			} 
			catch (Exception $e) { 
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
				GeraLog::getInstance()->inserirLog("Erro: Código: " . $e-> getCode() . " Mensagem: " . $e->getMessage());
			} 
		} 
		public function Deletar($cod) { 
			try { 
				$sql = "DELETE FROM usuarios WHERE id_usuario = :cod"; 
				$p_sql = Conexao::getInstance()->prepare($sql); 
				$p_sql->bindValue(":cod", $cod); 
				return $p_sql->execute(); 
			} 
			catch (Exception $e) { 
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
				GeraLog::getInstance()->inserirLog("Erro: Código: " . $e-> getCode() . " Mensagem: " . $e->getMessage());
			} 
		} */
		public function BuscarPorCOD($id) { 
			try { 
				$sql = "SELECT * FROM noticias WHERE id_noticia = :id"; 
				$p_sql = Conexao::getInstance()->prepare($sql); 
				$p_sql->bindValue(":id", $id); 
				$p_sql->execute(); 
				return $this->populaNoticia($p_sql->fetch(PDO::FETCH_ASSOC)); 
			} 
			catch (Exception $e) { 
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
				GeraLog::getInstance()->inserirLog("Erro: Código: " . $e-> getCode() . " Mensagem: " . $e->getMessage());
			} 
		}
		private function populaNoticia($row) { 
			$pojo = new PojoNews; 
			$pojo->setId_noticia($row['id_noticia']); 
			$pojo->setTitulo($row['titulo']); 
			$pojo->setTexto($row['texto']); 
			$pojo->setAutor($row['autor']);
			$pojo->setData($row['data']);
			return $pojo; 
		} 
	} 
?>