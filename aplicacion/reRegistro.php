<?php
	include 'sql.php';
	
	mysql_query('INSERT INTO usuarios (correo, contrasenna, edad, genero) VALUES(\''.$_POST['correo'].'\',\''.$_POST['contra'].'\',\''.$_POST['edad'].'\',\''.$_POST['genero'].'\')')or die(mysql_error());
	header('Location: publicidad.php?dat=2');

?>