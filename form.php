
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ItfipSport</title>
    <link rel="shortcut icon" href="./IMAGENES/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/normalize.css">
    <link rel="stylesheet" href="./CSS/estilos.css">
    <link rel="stylesheet" href="./CSS/registro.css">
    <link rel="stylesheet" href="./CSS/loin.css">



    <meta name="theme--color" content="#2091f9">




</head>
<body>

    <header class="hero">

        <nav class="nav container"> 
           <div class="nav_logo">

               <h2 class="nav_title">ItfipSport</h2>
           </div>
<Ul class="nav_link nav_link--menu">

</li><li class="nav_items">
   <a href="registro.html" class="nav_links">VOLVER</a>
</li>
<img src="./IMAGENES/x.svg"  class="nav_closs">
</Ul>
<div class="nav_menu">
<img src="./IMAGENES/menu.svg"  class="nav_img">
</div>
</nav>
       <section class="hero_container container">
               <h1 class="hero_title">ItfipSport</h1>
               <p class="hero_paragraph">DATOS GUARDADOS CON EXITO

             

               </p>
                  
</section>
<script src="./JS/slider.js"></script>
<script src="./JS/quetions.js"></script>
<script src="./JS/menu.js"></script>
<script src="./JS/alert.js"></script>




</body>
</html>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "registros";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$deporte = $_POST['deporte'];
$capitan = $_POST['capitan'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$sql = "INSERT INTO datos (nombre, deporte, capitan, telefono, correo) 
        VALUES ('$nombre', '$deporte', '$capitan', '$telefono', '$correo')";


if ($conn->query($sql) === TRUE) {
    echo "Datos guardados correctamente. <br><a href='index.html'>Volver</a>";
} else {
    echo "Hubo un error al guardar los datos: " . $conn->error;
}

// Cerrar conexión
$conn->close();

?>
