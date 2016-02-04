<?php 
	include ('seguridad.php');
	include ('conexion.php');
	$tip = mysql_query("select * from tbl_producto");
?>
<html>
<head>
	<title>Registrar Producto</title>
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
	function solonumeros (e) {
		key=e.keyCode || e.width;
		teclado=String.fromCharCode(key);
		numero="0123456789";
		especiales="8-37-38-46";
		teclado_especial=false;
		for(var i in especiales){
			if(key==especiales[i]){
				teclado_especial=true;
				break;
			}
		}
		if(numero.indexOf(teclado)==-1 && !teclado_especial){
			return false;
		}
	}
	function solonumero (e) {
		key=e.keyCode || e.width;
		teclado=String.fromCharCode(key);
		numero="0123456789.";
		especiales="8-37-38-46";
		teclado_especial=false;
		for(var i in especiales){
			if(key==especiales[i]){
				teclado_especial=true;
				break;
			}
		}
		if(numero.indexOf(teclado)==-1 && !teclado_especial){
			return false;
		}
	}
	</script>
</head>
<body>
	<header>
		<div class="menu_bar">
			<a href="MenuA.php" class="btn_menu"><span class="icon-menu3"></span>Volver</a>
		</div>
		<div class="volver">
			<a href="MenuA.php" class="btn_volver"><span class="icon-menu3"></span>Volver</a>
		</div>
		<form action="InsertarDescripcion.php" class="Formulario1" name="Formulario_R" method="POST">
			<div class="contenedorF">
				<div class="input_group">
					<select id="tipo" name="tipo">
						<option>--Selecione--</option>
							<?php 
								while($filaop=mysql_fetch_array($tip)){
							?>
							<option value="<?php echo ($filaop['Id_producto']);?>">
								<?php 
									echo($filaop['Tipo']);
								?>
							</option>
							<?php 
								}
							?>
					</select>
					<label class="lbl" for="tipo">Tipo</label>
				</div>
				<div class="input_group">
					<input type="text" id="codigo" name="codigo" autocomplete="off" required onkeypress="return solonumeros(event)" onpaste="return false"/>
					<label class="lbl" for="codigo">Codigo:</label>
				</div>
				<div class="input_group">
					<input type="text" id="marca" name="marca" autocomplete="off" required onkeypress="return sololetras(event)" onpaste="return false"/>
					<label class="lbl" for="marca">Marca:</label>
				</div>
				<div class="input_group">
					<input type="text" id="nombre" name="nombre" autocomplete="off" required onkeypress="return sololetras(event)" onpaste="return false"/>
					<label class="lbl" for="nombre">Nombre:</label>
				</div>
				<div class="input_group">
					<input type="text" id="precio" name="precio" autocomplete="off" required onkeypress="return solonumero(event)" onpaste="return false"/>
					<label class="lbl" for="precio">Precio:</label>
				</div>
				<div class="input_group">
					<input type="text" id="cantidad" name="cantidad" autocomplete="off" required onkeypress="return solonumeros(event)" onpaste="return false"/>
					<label class="lbl" for="cantidad">Cantidad:</label>
				</div>
				<input type="submit" class="btn btn-succes" id="guardar" name="guardar" value="Guardar">
				<script type="text/javascript" src="js/formulario.js"></script>
			</div>
		</form>	
	</header>
</body>
</html>