<?php
session_start();
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$_SESSION['usuario']= $usuario;

//conexion a la bd
$conexion=mysqli_connect("localhost","root","","login");
$consulta="SELECT * FROM login WHERE usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);

if ($filas>0){
	header("location:ingreso.php");
}
else{

	header("location:error.html");
}
