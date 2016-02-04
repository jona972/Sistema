<?php
session_start();
include ('conexion.php');
if(isset($_SESSION['user'])) {
}else{
	echo '<script> window.location="index.php"; </script>';
	exit();
}
?>