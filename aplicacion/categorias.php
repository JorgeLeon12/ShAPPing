<?php
include 'sql.php';
if(isset($_GET['ti'])){
	$Pub = mysql_query('SELECT DISTINCT id, nombre FROM publicidad');
	echo '<table border="0"><tr>';
	while($rowPub = mysql_fetch_row($Pub)){
		echo '<tr><td><a href="Mapa.php?id='.$rowPub[0].'"><h2>'.$rowPub[0].'</h2></a></td></tr>';
	}
	echo '</tr></table>';
}else{
	$Pub = mysql_query('SELECT DISTINCT giro FROM publicidad');
	echo '<table border="0">';
	while($rowPub = mysql_fetch_row($Pub)){
		echo '<tr><td><a href="categorias.php?ti='.$rowPub[0].'"><h2>'.$rowPub[0].'</h2></a></td></tr>';
	}
	echo '</table>';
}
?>