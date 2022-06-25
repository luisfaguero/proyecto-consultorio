<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('db.php');
	
$nombre=$_POST['txtNombre'];
$usuario=$_POST['txtUsuario'];
$contrasenia=$_POST['txtContrasenia'];



mysqli_query($bd, "INSERT INTO usuarios values (DEFAULT,'$nombre','$usuario','$contrasenia')" );

header("location: index.php?ok");





?>