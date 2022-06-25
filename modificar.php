<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/estilos.css">
    
    <title>Form</title>
</head>
<body>
   <!-----------cabecera-->
  <div>
  <header class="enca"> <!---barra-->
    <div class="wrap"> <!---dentro del encabezado-->
        <div class="logos"> <!----titulo-->
            Consultorio Dra. Yanina Resumi 
        </div>
        <nav> <!----botones-->
            <a href="index.php">Inicio</a>
            <a href="mostrar.php">Pacientes</a>
            <a href="">Listas De Pacientes</a>
            <a href="">Informes De Estudios</a>
        </nav>
    </div>
</header>
</div>

<!-----------fin cabecera-->
<div class="form">
     <div class="text1">
     <span class="" id="basic-addon1">Nombre</span>
        <input type="text" rows="9" name="nombre">
     
     
          <span class="" id="basic-addon1">Apellido</span>
        <input type="text"  name="Apellido">
     </div>   
        <div class="text2">

        <span class="" id="basic-addon1">Dni </span>
        <input type="text"   name="Dni"> 
        
      
        <span class="" id="basic-addon1">Domicilio</span>
        <input type="text"   name="Domicilio">


        </div>
        <div class="text3">
        <span class="" id="basic-addon1">Edad </span>
        <input type="text"   name="Edad" > 
        
        </div>
        <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Diagnostico</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="13"></textarea>
</div>


        </div>
 
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 
   

</body>
</html>