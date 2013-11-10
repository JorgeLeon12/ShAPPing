<?php
if(isset($_SESSION['id'])){
		header('Location: publicidad.php?dat=2');
}else{
	$EDAD = "";
	for($i = 18; $i < 100; $i++){
    	$EDAD .= '<option value="'.$i.'">'.$i.'</option>';
    }
	echo'
    <style>html, body, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, caption{
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-family:"lucida grande",tahoma,verdana,arial,sans-serif;
} </style>
    <form method="post" action="reRegistro.php" >
	<table border="0">
    	<tr><td>Correo:</td><td><input type="text" name="correo"></td></tr>
        <tr><td>Contrase&ntilde;a:</td><td><input type="text" name="contra"></td></tr>
        <tr><td>Edad:</td><td><select name="edad">
                <option>
                '.$EDAD.'
                </option>
                </select></td></tr>
        <tr><td>Genero:</td><td><select name="genero"><option></option><option value="M">Masculino</option><option value="F">Femenino</option></select></td></tr>
        <tr><td><input type="submit" value="Registrar"></table>
        <br>
        <a hrefsrc="publicidad.php?dat=2">No registrarme por ahora</a>
    </form>';
}
?>