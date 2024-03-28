<?php 

	class connect{
		private $hnm = 'localhost';
		private $db = 'tallerpoo';
		private $usr = 'root';
		private $pwrd = '123456';
		private $conn;


		//Methods

		public function conectar(){
			$dsn = "mysql:host=".$this->hnm.";dbname=".$this->db;

			try {
				$this->conn = new PDO($dsn, $this->usr, $this->pwrd);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $this->conn;
			} catch (PDOException $e){
				echo 'No se pudo establecer la conexion'. $e->getMessage();
			}
		}

		public function dsconnct(){
			$this->conn = null;
		}



	}


?>