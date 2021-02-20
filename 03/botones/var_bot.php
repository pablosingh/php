

<?php
		if ( isset($_GET) )
		{
			switch ($_GET['ok'])
			{
				case '1': echo 'Se presiono el boton nro 1.';break;
				case '2': echo 'Se presiono el boton nro 2.';break;
				case '3': echo 'Se presiono el boton nro 3.';break;
			}
				
		}
		
?>


<html>
<form action = "var_bot.php" method = "get">
		<title> Pagina </title>
		<head>	</head>
		<body>  
				</br></br>
				<input type = "submit" name = 'ok' value ='1'>
				</br></br>
				<input type = "submit" name = 'ok' value ='2'>
				</br></br>
				<input type = "submit" name = 'ok' value ='3'>
				</br></br>
		</body>
</html>
