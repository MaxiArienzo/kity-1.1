<? php
require 'loguear.php';
session_start();
$varsesion =$_SESSION['usuario'];
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
<link rel="stylesheet" href="css/estilos.css" type="text/css" media="all" />
<title>ATCOM -Ingreso-</title>
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
<a href="cerrar_sesion.php" target="_blank" onClick="window.open(this.href, this.target, 'width=450,height=300'); return false;"><input type='button' name='Cerrar Sesion' value='Cerrar Sesion' style='width:150px; height:30px'> </a>
<div align="center">
	<div align="center">
		<img src="imagenes/membrete.png" style="max-width:100%;width:auto;height:auto;">
	</div>

<H1> BIENVENIDO: </H1>; <? echo['$varsession']?>;
<br>
<br>

	<a href="registro.html" target="_blank" onClick="window.open(this.href, this.target, 'width=450,height=300'); return false;"><input type='button' name='Ingresar' value='Ingresar Registro' style='width:150px; height:30px'> </a>

	<a href="consulta.html" target="_blank" onClick="window.open(this.href, this.target, 'width=450,height=300'); return false;"><input type='button' name='Consultar' value='Consultar Registro' style='width:150px; height:30px'> </a>

	</div>
</html>
>?