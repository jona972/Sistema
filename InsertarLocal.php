<?php 
	include('conexion.php');
	if($_POST['guardar']!=null){ 
		$cal=$_POST['local'];
		$cadena="Insert into tbl_sucursal values('','$cal')";
		mysql_query($cadena,$conex)or die("No se logro Insertar");
		header('Location: RegistroLocal.php');
	}
?>