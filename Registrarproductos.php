<?php 
	include ('seguridad.php');
	include('conexion.php');
?>
<html>
<head>
	<title>Categoria del producto</title>
	<link rel="stylesheet" type="text/css" href="css/Estilo.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script type="text/javascript">
		function sololetras (e) {
			key=e.keyCode || e.width;
			teclado=String.fromCharCode(key).toLowerCase();
			letras=" abcdefghijklmnñopqrstuvwxyz";
			especiales="8-37-38-46-164";
			teclado_especial=false;
			for(var i in especiales){
				if(key==especiales[i]){
					teclado_especial=true;
					break;
				}
			}
			if(letras.indexOf(teclado)==-1 && !teclado_especial){
				return false;
			}
		}
	</script>
</head>
<body>
	<div class="menu_bar">
			<a href="MenuA.php" class="btn_menu"><span class="icon-menu3"></span>Volver</a>
		</div>
		<div class="volver">
			<a href="MenuA.php" class="btn_volver"><span class="icon-menu3"></span>Volver</a>
		</div>
		<form action="Insertarclasificaion.php" class="Formulario1" name="Formulario_R" method="POST">
			<div class="contenedorF">
				<div class="input_group">
					<input type="text" id="tipo" name="tipo" autocomplete="off" required onkeypress="return sololetras(event)" onpaste="return false"/>
					<label class="lbl" for="tipo">Tipo:</label>
				</div>
				<input type="submit" class="btn btn-succes" id="guardar" name="guardar" value="Guardar">
				<script type="text/javascript" src="js/formulario.js"></script>
			</div>
		</form>	
	</header>
</body>
</html>