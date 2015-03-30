<?php 
	require ("Conexion.php");
	class Query
	{

		private $q;

		public function __Query($q){
			$this->q = $q;
		}

		public function regiones(){
			$con = new Conexion;
			$con->conectar();
			$q = "CALL sp_regiones();";
			$result = mysql_query($q);

			if ($result > 0) {
				while ($row = mysql_fetch_assoc($result))
              {
                  $r[0][] = $row['id_region'];
                  $r[1][] = $row['region'];
              }
			}

			$con->desconectar();
			return $r;
		}
	}
 ?>