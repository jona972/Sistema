<?php 
	include ('conexion.php');
	if($_POST['guardar']!=null){ 
		$ce=$_POST['tipo'];
		$nom=$_POST['codigo'];
		$ape=$_POST['marca'];
		$dir=$_POST['nombre'];
		$tel=$_POST['precio'];
		$em=$_POST['cantidad'];
			$cadena="Insert into tbl_descripcion_pro values('$ce','$nom','$ape','$dir',$tel,$em)";
		mysql_query($cadena,$conex)or die("No se logro Insertar");
		header('Location: Descripcionproducto.php');
	}
?>