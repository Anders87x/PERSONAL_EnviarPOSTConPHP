<?php
	session_start();
	class Conectar {
	protected $dbh;
		protected function Conexion(){
			try {
				$conectar= $this->dbh = new PDO("sqlsrv:Server=192.168.18.47;Database=JC_XIPHOS2_28122020", "sa", "*vo.2015");
				return $conectar;
			} catch (Exception $e) {
				print "¡Error! MK: " . $e->getMessage() . "<br/>";
				die();
			}
		}
		
		public function set_names(){	
			return $this->dbh->query("SET NAMES 'utf8'");
		}

		public function ruta(){
			//Local
			return "http://localhost:90/PERSONAL_EnviarPOSTConPHP/";
			//QA
			//return "http://qasli.transtotalperu.com/";
		}
	}
?>