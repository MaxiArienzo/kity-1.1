<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
<link rel="stylesheet" href="css/estilos.css" type="text/css" media="all" />
<title>ATCOM -Registro Vehiculos-</title>
</head>
<style type="text/css">
	body {
background-image: url(imagenes/fondo.png);
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}

</style>
<body>
	<div align="center">
		<img src="imagenes/membrete.png" style="max-width:100%;width:auto;height:auto;">
	</div>
	<div align="center">
<H3>Ingresar un Nuevo Registro</H3>
</div>
<br>
<div>
 <center>
	 <div class="container-fluid">
		<form method="POST" action="registro.php">
			<div style="width:50%; float:left;">
			<input  type="text" name="marca" placeholder="Marca" />
			<br>
			<br />
			<input type="text" name="modelo" placeholder="Modelo" />
			<br>
			<br />
			<input type="text" name="dominio" placeholder="Dominio" />
			<br>
			<br />
			<input type="text" name="color" placeholder="Color" />
			<br>
			<br />
			<input type="text" name="nchasis" placeholder="N° Chasis" />
</div>
		<div style="width:50%; float:left;">
			<input type="text" name="nmotor" placeholder="N° Motor" />
			<br>
			<br />
			<input type="text" name="observacion" placeholder="Observaciones" />
			<br>
			<br />
			<input type="text" name="organismo" placeholder="Organismo" />
			<br>
			<br />
			<input type="text" name="ciudad" placeholder="Ciudad" />
			<br>
			<br />
			<input type="text" name="status" placeholder="Situación" />
			<br>
			<br />
</div>
			<input type='submit' name='Registrar' value='Registrar' style='width:100px; height:30px'>
			
		</form>
	</center>
  </div>
</div>
</body>
</html>
	</center>
</div>

</body>

</html>