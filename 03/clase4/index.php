<?php

		require 'DBSimple.php';

		$db = new DBSimple();
		$db->consultar ("SELECT * FROM usuarios");

		while ($persona = $db->getResult())
		{
			echo "Nombre : ".$persona["Nombre"];
			echo "<br>";
			echo "Apellido : ".$persona["Apellido"];
			echo "<br>";
			echo "Cel : ".$persona["Tel"];
			echo "<br>";
			echo "ID : ".$persona["Id"];
			echo "<br>";
			echo "<hr>";
		}
?>