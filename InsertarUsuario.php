<?php 
	include ('conexion.php');
	if($_POST['guardar']!=null){ 
		$ce=$_POST['usuario'];
		$pass=$_POST['pass'];
		$car=$_POST['cargo'];
		if(($ce=="--Selecione--") || ($car=="--Selecione--")){
			header('Location: RegistroUsuario.php');	
		}else{
			$cadena="Insert into tbl_usuario values('$ce','$pass','$car')";
			mysql_query($cadena,$conex)or die("No se logro Insertar");
			header('Location: RegistroUsuario.php');
		}
	}
?>