
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
<link rel="stylesheet" href="css/estilos.css" type="text/css" media="all" />
<title>ATCOM -Login-</title>
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


<div>
	<center>
		<form method="POST" action="loguear.php">
		<br>
		<br/>
			<input type="text" name="usuario" placeholder="Usuario" />
			<br>
			<br />
			<input type="password" name="contraseña" placeholder="Contraseña" />
			<br>
			<br />
			<button type="submit"><strong>Ingresar</strong></button>
			
		</form>
	</center>
</div>

</body>

</html>