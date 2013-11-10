<?php
if(isset($_SESSION['id'])){
		header('Location: publicidad.php?dat=2');
}else{
	$EDAD = "";
	for($i = 18; $i < 100; $i++){
    	$EDAD .= '<option value="'.$i.'">'.$i.'</option>';
    }
	echo '
	<form method="post" action="reRegistro.php">
	<table border="0">
    	<tr><td>Correo:</td><td><input type="text" name="correo"></td></tr>
        <tr><td>Contrase&ntilde;a:</td><td><input type="text" name="contra"></td></tr>
        <tr><td>Edad:</td><td><select name="edad">
                <option>
                '.$EDAD.'
                </option>
                </select></td></tr>
        <tr><td>Genero:</td><td><select name="genero"><option></option><option value="M">Masculino</option><option value="F">Femenino</option></select></td></tr></table>
    </form>';
}
?>