<?php
	include('conexion.php');

	class users{
		public $id;
		public $nom_usr;
		public $pwrd_usr;
		public $prfl_id;
		public $dt_utraccss;
		public $sts_id;
		public $cod_usr_rgstr;
		public $cod_usr_updt;
		public $dt_rgstr;
		public $dt_updt;


		//Methods

		public function registrar() {
			$objConnect = new connect();
			$conexion = $objConnect -> conectar();
			$sql = "INSERT INTO usuario (nombre, clave, perfil_id, status_id, cod_usu_registro) VALUES (:nom_usr, :pwrd_usr, :prfl_id, :sts_id, :cod_usr_rgstr);";

			$stmt = $conexion->prepare($sql);
			$stmt->bindParam(':nom_usr', $nom_usr);
			$stmt->bindParam(':pwrd_usr', $pwrd_usr);
			$stmt->bindParam(':prfl_id', $prfl_id);
			$stmt->bindParam(':sts_id', $sts_id);
			$stmt->bindParam(':cod_usr_rgstr', $cod_usr_rgstr);

			$stmt->execute();
			$stmt = null;

			$objConnect -> dsconnct();

			echo "Usuario registrado exitosamente";

		}

		public function consultar(){

		}

		public function actualizar(){
			
		}

		public function listar(){
			$objConnect = new connect();
			$conexion = $objConnect -> conectar();
			$sql = "SELECT id, nombre, perfil_id, status_id FROM usuario";
			$stmt = $conexion->prepare($sql);
			$stmt->execute();
			$listUsrs = array();

			while($row = $stmt->fetch(PDO::FETCH_OBJ)){
				$objUsuario = new users();
				$objUsuario -> id = $row->id;
				$objUsuario -> nom_usr = $row->nombre;
				$objUsuario -> prfl_id = $row->perfil_id;
				// $objUsuario -> dt_ultraccss = $row->fecha_ultracceso;
				$listUsrs[]=$objUsuario;
			}
			return $listUsrs;

			$stmt = null;
			$objConnect	-> dsconnct();
		}

		public function validar(){
			
		}
	}

?>