<?php

		require 'DBSimple.php';

//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////  http://127.0.0.1/155/clase4/
//////////////////////////////////////////////////////////////

		$db = new DBSimple();
		$db->consultar ("SELECT * FROM usuarios");

		while ($persona = $db->getResult())
		{
			echo "Nombre : ".$persona["Nombre"];
			echo "<br>";
			echo "Apellido : ".$persona["Apellido"];
			echo "<br>";
			echo "Cel : ".$persona["Cel"];
			echo "<br>";
			echo "ID : ".$persona["Id"];
			echo "<br>";
			echo "<hr>";
		}
?>