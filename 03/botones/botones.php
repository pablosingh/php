

<?php
		if ( isset($_GET['ok']) && ( $_GET['ok'] == '1' ) )
		{
			//if ( ($_POST['ok']) == 'ok' )
				echo 'Se presiono el boton.';
		}
		//*/
		/*
		if ( $_POST['ok'] == 'ok' )
			echo 'Se presiono el boton.';
		//*/

?>


<html>
<form action = "botones.php" method = "get">
		<title> Pagina </title>
		<head>	</head>
		<body>  
				<input type = "submit" name = 'ok' value ='1'>
		</body>
</html>
