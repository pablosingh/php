<?php
		//conexion
		$db = new PDO ( "mysql:host=localhost; dbname=romeo","root","");
		//consulta
		$consulta = "SELECT * FROM usuarios";		
		$res = $db->query($consulta);

		// Obtenemos los datos como Array []
		while ( $persona= $res->fetch() )
		{
			echo "Mi Nombre es : ". $persona["Nombre"];
			echo "<br>";
			echo "y mi Apellido es : ". $persona["Apellido"];
			echo "<br>";
			echo "mi cel es : ".$persona["Tel"];
			echo "<br>";
			echo "mi ID es : ".$persona["Id"];
			echo "<br>";
			echo "<br>";
		}
	
?>