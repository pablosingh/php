<?php
		//conexion
		$db = new PDO ( "mysql:host=localhost; dbname=romeo","root","");
		//consulta
		$consulta = "SELECT * FROM usuarios";		
		$res = $db->query($consulta);

		// Obtenemos los datos como Array []

		$persona= $res->fetch();

		echo "Nombre  ". $persona["Nombre"];
		echo "<br>";
		echo "Apellido  ". $persona["Apellido"];

	
?>