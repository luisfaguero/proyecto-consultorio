<?php

include('db.php');

$iD=$_GET['Id'];

mysqli_query($bd,"DELETE FROM usuarios where id= '$iD' ")or die("error al eliminar");


header("location:mostrar.php?ok");

?>