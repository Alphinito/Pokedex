<?php 
    session_start();
    include_once '../../backend/sesion.php';
    $objeto = new SESION;
    $objeto -> ComprobarSesion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--  Conexión a API de google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!--  Fuente de googole fonts: font-family: 'Signika Negative', sans-serif; -->
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap" rel="stylesheet">

    <!--  Fuente de googole fonts: font-family: 'Secular One', sans-serif; -->
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">

    <!--  CSS  -->
    <link rel="stylesheet" href="../css/styles.css">

    <title>Pokédex</title>
</head>
<body id="id_body">
<?php

//VALIDACIÓN PARA QUE NO SE MUESTREN LOS DIALOGOS CADA QUE SE ACCEDA A LA PAGINA: 1/2
$cc=0;
while($cc<1){
    $dX = $_SESSION["USU"]['PI'];
    $cc++;
}
if($dX != 1){
?>
   <!--  DIALOGOS   -->
    <section class="dialogos" id="id_dialogos">
        <label for=""><img src="../img/Profesor_Oak.png" alt="" class="doctor">
            <legend class="NombreDoctor">Prof. Oak</legend>
            <p class="dialogo" id="D1">¡Hola! <?php echo "{$_SESSION["USU"]['NOMBRE']}"; ?>, Bienvenid@ a la Pokédex</p>
            <p class="dialogo" id="D2">Aquí podrás encontrar todo lo que necesites saber acerca de los Pokémon</p>
            <p class="dialogo" id="D3">Espero disfrutes de la experiencia</p>
            <p class="dialogo" id="D4">Si me disculpas voy a seguir buscando un buen trabajo</p>
            <p class="dialogo" id="D5">Ups... Se me calló esto por aquí, espero nadie lo vea < angel000hr@gmail.com ></p>
        </label>
    </section>
    <?php
}
?>
    <!--   ENCABEZADO   -->
    <header id="id_header">
        <h1 class="titulo">Pokédex</h1>
        <div class="usuario">
            <img src="../img/entrenador-pokemon.png" alt="">
            <?php echo "{$_SESSION["USU"]['NOMBRE']}"; ?>
            <a href="../../controlador/crerrarSesion.php" class="cerrarS">Cerrar sesión</a>
        </div>
    </header>


    <section class="cuerpo" id="id_cuerpo">

        <?php include '../../backend/api.php'; ?> <!--  LISTA DE POKÉMON   -->

    </section>


    <footer>
    <!--  SIN TIEMPO   -->
    </footer>

    <!-- Librería Typed.js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script><!-- SIN TIEMPO PARA APLICAR -->
    
</body>

<?php
//VALIDACIÓN PARA QUE NO SE MUESTREN LOS DIALOGOS CADA QUE SE ACCEDA A LA PAGINA: 2/2
$c=0;
while($c<1){
    $dX = $_SESSION["USU"]['PI'];
    $c++;
}
if($dX != 1){
?>
<!--  JS  -->
<script src="../js/script.js"></script>
<?php
}else{
    ?>
    <script>
        var header = document.getElementById('id_header');
        header.style.opacity='1';

        var cuerpo = document.getElementById('id_cuerpo');
        cuerpo.style.opacity='1';

        var body = document.getElementById('id_body');
        body.style.overflowY='scroll';
        body.style.backgroundImage='none';
    </script>
    <?php
}
?>
</html>