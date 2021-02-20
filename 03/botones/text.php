
<?php
		if ( isset($_GET['ok']) && ($_GET['ok']= 'ok') )
		{
				echo 'Se inserto : '.$_GET['caja1'];
		}
		
?>


<html>
<form action = "text.php" method = "get">
		<title> Pagina </title>
		<head>	</head>
		<body>  
				</br></br>
				<input type = "text" id='ca' name = 'caja1' value =''>
				</br>
				<input type = "submit" name = 'ok' value ='ok'>
				</br></br>

		</body>
</html>
