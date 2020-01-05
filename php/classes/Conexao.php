<?php
	class Conexao{
		private $bdh;

		public function __construct(){
			$dsn = 'mysql:dbname=pdm;host=localhost';
			$user = 'root';
			$password = '';
			try {
				$this->dbh = new PDO($dsn, $user, $password);
				return true;
			} catch (PDOException $e) {
				echo 'Connection failed: ' .
				 $e->getMessage();
				 return false;
			}
		}

		public function desconectar() {
       		 $this->bdh = NULL;
    	}

		public function insert($sql){
			$count = null;
		    if (empty($sql)) {
				echo "sql em branco";
				return false;
			}	
			$count = $this->dbh->exec($sql);
		}
		
		public function del($sql){
			$count = null;
		    if (empty($sql)) {
				echo "sql em branco";
				return false;
			}	
			$count = $this->dbh->exec($sql);
		}

		public function update($sql){
			$count = null;
			if (empty($sql)){
				echo "sql em branco";
				return false;
			}
			$count = $this->dbh->exec($sql);
		}

		public function busca($sql){
			if (empty($sql)) {
				echo "sql em branco";
				return false;
			}
			return $this->dbh->query($sql) ;
		}

		

	}

?>