<?php 
	include 'seguridad.php'
?>
<html>
<head>
	<title>GERENTE</title>
	<link rel="stylesheet" type="text/css" href="css/Estilo.css">
	<link rel="stylesheet" type="text/css" href="fonts/style.css">
	<script type="text/javascript" src="js/jquery-latest.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<header>
		<div class="menu_bar">
			<a href="#" class="btn_menu"><span class="icon-menu3"></span>Menu</a>
		</div>
		<nav>
			<ul>
				<li><a href="#"><span class="icon-library"></span>Inicio</a></li>		
				<li class="subEmpleados">
					<a href="#"><span class="icon icon-circle-down"></span></a>
					<ul class="Empleadoh">
						<li><a href="#">Crear Usario <span class="icon-opera"></span></a></li>
						<li><a href="#">Registar Empleado <span class="icon-Profile"></span></a></li>
					</ul>
				</li>
				<li><a href="#"><span class="icon-cart"></span>Productos</a></li>
				<li><a href="#"><span class="icon-file-text2"></span>Ventas Local</a></li>
				<li><a href="#"><span class="icon-addres-book"></span>Reportes</a></li>
				<li><a href="Cerrar.php"><span class="icon-cross"></span>Cerrar Seccion</a></li>
			</ul>
		</nav>
	</header>
</body>
</html>

