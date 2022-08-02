<?php

class busqueda{
	
	
	
		public static function buscar ($filtro,$conexion,$tabla,$campo,$quedevuelve){
			
			
			$sql= "SELECT * FROM $tabla WHERE $campo= '$filtro'";
			$resultado = mysqli_query($conexion,$sql);
			$res=$resultado->FETCH_ASSOC();
			$a=$res["$quedevuelve"];
		
			return $a;
		}
}


?>

