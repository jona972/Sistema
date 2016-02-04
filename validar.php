<?php	
	error_reporting(0);
    session_start();

    include("conexion.php");

    if ($_POST['user'] == null || $_POST['pw'] == null) {
        echo '<span>Por favor complete todos los campos.</span>';
    } else {
        $user = mysql_real_escape_string($_POST['user'], $conex);
        $pass = mysql_real_escape_string($_POST['pw'], $conex);
        $log = mysql_query("SELECT * FROM tbl_usuario WHERE Cedula_P='$user' AND Password='$pass'");

		if (mysql_num_rows($log)>0) {
			$row = mysql_fetch_array($log);
			if($row['Cargo']=="Administrador") {
				$_SESSION["user"] = $row['Cedula_P']; 
				echo '<script> window.location="MenuA.php"; </script>';
			} elseif ($row['Cargo']=="Gerente") {
				$_SESSION["user"] = $row['Cedula_P']; 
				echo '<script> window.location="MenuG.php"; </script>';
			} elseif ($row['Cargo']=="Vendedor") {
				$_SESSION["user"] = $row['Cedula_P'];
				echo '<script> window.location="MenuE.php"; </script>';
			}
		} else {
            echo '<span>El usuario y/o clave son incorrectas, vuelva a intentarlo.</span>';
        }
    }
?>	