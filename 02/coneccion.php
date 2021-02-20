<?php

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

if ( $usuario==='' || $pass==='' ){
	echo json_encode('Error-vacio');
}else{
	echo json_encode('Correcto// User: '.$usuario.' // Pass: '.$pass);
}

?>