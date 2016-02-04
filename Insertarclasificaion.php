<?php 
	include('conexion.php');
	if($_POST['guardar']!=null){ 
		$cal=$_POST['tipo'];
		$cadena="Insert into tbl_producto values('','$cal')";
		mysql_query($cadena,$conex)or die("No se logro Insertar");
		header('Location: Registrarproductos.php');
	}
?>