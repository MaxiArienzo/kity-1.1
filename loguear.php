<?php
session_start();
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];


//conexion a la bd
$conexion=mysqli_connect("localhost","root","","login");
$consulta="SELECT * FROM login WHERE usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);

if ($filas>0){
	$_SESSION['username']= $usuario;
	header("location:index.php");
}
else{

	header("location:error.html");
}