<?php 
	include ('seguridad.php');
	include ('conexion.php');
	$ced = mysql_query("select * from tbl_personal");
?>
<html>
<head>
	<title>Crear Usuario</title>
	<link rel="stylesheet" type="text/css" href="css/Estilo.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<header>
		<div class="menu_bar">
			<a href="MenuA.php" class="btn_menu"><span class="icon-menu3"></span>Volver</a>
		</div>
		<div class="volver">
			<a href="MenuA.php" class="btn_volver"><span class="icon-menu3"></span>Volver</a>
		</div>
		<form action="InsertarUsuario.php" class="Formulario1" name="Formulario_R" method="POST">
			<div class="contenedorF">
				<div class="input_group">
					<select id="usuario" name="usuario">
						<option>--Selecione--</option>
							<?php 
								while($filaop=mysql_fetch_array($ced)){
							?>
							<option value="<?php echo ($filaop['Cedula_P'])?>">
								<?php 
									$nom=$filaop['Nombre_P'];
									$espa=" ";
									$cnom= $nom . $espa . $filaop['Apellido_P'];
									echo($cnom);
								?>
							</option>
							<?php 
								}
							?>
					</select>
					<label class="lbl" for="usuario">Usuario</label>
				</div>
				<div class="input_group">
					<input type="password" id="pass" name="pass" autocomplete="off" required onpaste="return false"/>
					<label class="lbl" for="pass">Password:</label>
				</div>
				<div class="input_group">
					<select id="cargo" name="cargo">
						<option>---Selecione--</option>
						<option>Administrador</option>
						<option>Gerente</option>
						<option>Vendedor</option>
					</select>
					<label class="lbl" for="Estado">Estado Civil</label>
				</div>
				<input type="submit" class="btn btn-succes" id="guardar" name="guardar" value="Guardar">
				<script type="text/javascript" src="js/formulario.js"></script>
			</div>
		</form>	
	</header>
</body>
</html>