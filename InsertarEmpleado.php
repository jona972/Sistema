<?php 
	include ('conexion.php');
	$cod = mysql_query("select count(Id_Personal) from tbl_personal");
	while($fila = mysql_fetch_array($cod)){
		$num = $fila[0] + 1; 
	}
	if($_POST['guardar']!=null){ 
		$ce=$_POST['Cedula'];
		$nom=$_POST['Nombre'];
		$ape=$_POST['Apellido'];
		$dir=$_POST['Direccion'];
		$tel=$_POST['Telefono'];
		$em=$_POST['Email'];
		$es=$_POST['Estado'];
		$sex=$_POST['sexo'];
		$dis=$_POST['Discapacidad'];
		$su=$_POST['sucursal'];
		$cadena="Insert into tbl_personal values('','$ce','$nom','$ape','$dir','$em','$es','$sex','$dis','$su')";
		$cadena1="Insert into tbl_telefono_personal values('$num','$tel')";
		mysql_query($cadena,$conex)or die("No se logro Insertar");
		header('Location: RegistroEmpleado.php');
	}
?>