<?php
		require_once "usuario.php";
		$temp = new usuario();

		if ( isset ($_GET) && $_GET['bot'] =='ok' )
		{
			$temp->setApellido($_GET['a']);	
			$temp->setNombre ($_GET['n']);
			$temp->setCel ($_GET['c']);

			echo "<br>";
			echo 'Apellido :  '.$temp->getApellido();
			echo "<br>";
			echo 'Nombre :  '.$temp->getNombre();
			echo "<br>";
			echo 'Cel    :  '.$temp->getCel();
		}
?>


<html>
<form action = "index.php" method = "get">
<title> </title>
<head> </head>

<body> 
		<br><br>
		Ingrese el nuevo usuario: 
		<br><br>
		Apellido :   <input type = "text" id= '0' name = 'a' value = ''>
		<br>
		Nombre :     <input type = "text" id= '0' name = 'n' value = ''>
		<br>
		Celular :    <input type = "text" id= '0' name = 'c' value = ''>
		<br>
		<input type = "submit"  name = 'bot' value = 'ok'>

</body>


</html>