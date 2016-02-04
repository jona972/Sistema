<?php
	include ('seguridad.php');
	include ('conexion.php');
?>
<html>
<head>
	<title>Registro Empleado</title>
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
		<form action="InsertarEmpleado.php" class="Formulario1" name="Formulario_R" method="POST">
			<div class="contenedorF">
				<div class="input_group">
					<input type="text" id="Cedula" name="Cedula" autocomplete="off" required onkeypress="return solonumeros(event)" onpaste="return false"/>
					<label class="lbl" for="Cedula">Cedula:</label>
				</div>
				<div class="input_group">
					<input type="text" id="Nombre" name="Nombre" autocomplete="off" required onkeypress="return sololetras(event)" onpaste="return false"/>
					<label class="lbl" for="Nombre">Nombre:</label>
				</div>
				<div class="input_group">
					<input type="text" id="Apellido" name="Apellido" autocomplete="off" required onkeypress="return sololetras(event)" onpaste="return false"/>
					<label class="lbl" for="Apellido">Apellido:</label>
				</div>
				<div class="input_group">
					<input type="text" id="Direccion" name="Direccion" autocomplete="off" required />
					<label class="lbl" for="Direccion">Direccion:</label>
				</div>
				<div class="input_group">
					<input type="text" id="Telefono" name="Telefono" autocomplete="off" required onkeypress="return solonumeros(event)" onpaste="return false"/>
					<label class="lbl" for="Telefono">Telefono:</label>
				</div>

				<div class="input_group">
					<input type="email" id="Email" name="Email" autocomplete="off" required />
					<label class="lbl" for="Email">Email:</label>
				</div>
				<div class="input_group">
					<select id="Estado" name="Estado">
						<option>---Selecione--</option>
						<option>Soltero</option>
						<option>Casado</option>
						<option>Divorciado</option>
						<option>Viudo</option>
					</select>
					<label class="lbl" for="Estado">Estado Civil</label>
				</div>
				<div class="input_group radio ">
					<input type="radio" name="sexo" id="Hombre" value="Hombre">
					<label for="Hombre">Hombre</label>
					<input type="radio" name="sexo" id="Mujer" value="Mujer">
					<label for="Mujer">Mujer</label>
				</div>
				<div class="input_group">
					<input type="text" id="Discapacidad" name="Discapacidad" autocomplete="off" required onkeypress="return sololetras(event)" onpaste="return false"/>
					<label class="lbl" for="Discapacidad">Discapacidad:</label>
				</div>
				<div class="input_group">
					<select id="sucursal" name="sucursal">
						<option>--Selecione--</option>
							<?php 
								$ds=mysql_query("Select Id_Sucursal,Nombre from tbl_sucursal",$conex);
								while($filaop=mysql_fetch_array($ds)){
							?>
							<option value="<?php echo ($filaop['Id_Sucursal'])?>">
								<?php 
									echo($filaop['Nombre']);
								?>
							</option>
							<?php 
								}
							?>

					</select>
					<label class="lbl" for="sucursal">Sucursal</label>
				</div>
				<input type="submit" class="btn btn-succes" id="guardar" name="guardar" value="Guardar">
				<script type="text/javascript" src="js/formulario.js"></script>
			</div>
		</form>
	</header>
</body>
</html>