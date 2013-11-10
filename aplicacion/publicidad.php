<?php
echo '
<style>
	@charset "utf-8";
html, body, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, caption{
	margin:0;
	border:0;
	outline:0;
	</style>
';
	include 'sql.php';
if(isset($_GET['dat']) && $_GET['dat'] == 2){
echo '
	<div>
    	<img src="" width="150" height="150">
        <img src="" width="150" height="150">
    </div><div>
        <img src="" width="150" height="150">
        <img src="" width="150" height="150">
    </div>
';
}else{
echo '
	<div>
    	<img src="" width="100%" height="100%">
		<meta http-equiv="Refresh" content="5;url=registro.php">
    </div>
';
}
?>