<?php
error_reporting(0);
	$conex=mysql_connect("localhost","root","")or die("Error al conectar el servidor" .mysql_error());
	mysql_select_db("bdd_usuarios",$conex)or die("Error al conectar a la base de datos" .mysql_error());	
?>