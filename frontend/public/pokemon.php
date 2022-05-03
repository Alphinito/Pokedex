<?php
    session_start();
    include_once '../../backend/sesion.php';
    $objeto = new SESION;
    $objeto -> ComprobarSesion();
    $objeto -> Conectar('localhost','root','','pokedex'); 
    $objeto -> PrimerInicio();
    $objeto -> Desconectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

            <!--  Conexión a API de google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!--  Fuente de googole fonts: font-family: 'Signika Negative', sans-serif; -->
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap" rel="stylesheet">

    <!--  Fuente de googole fonts: font-family: 'Secular One', sans-serif; -->
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">

        <!--  CSS  -->
        <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<div class="ficha">
        <a href="home.php" class="ficha_volver"><</a>

<?php include_once '../../backend/api2.php'; ?> <!--  FICHA POKEMÓN  -->

</div>        
</body>
</html>
