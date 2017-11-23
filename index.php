<?php
if (!isset($_COOKIE['visite'])){
$_COOKIE['visite'] = 0;
}
else{
$visite = $_COOKIE['visite'] + 1;
}
setcookie('visite',$visite,time()+86400*7);
?>
<html>
<head>
<title> Cookie Counter </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- utilizzata per responsive--></head>
<body bgcolor="#77B2C9" align="center"><font face="calibri" size="5">
    	<h1>Cookie Counter</h1>
        <?php
			if ($visite > 1) 
  				echo("Hai visitato questo sito $visite volte.");
            else
  				echo('E\' la prima volta che visiti questo sito.');
		?>
        <br><br><input type="button" value="Ricarica la pagina" onClick="window.location.reload()">
    </font></body>
</html>
