<?php

$DatosR = $_GET['pokemon'];
$NP = $_GET['n'];
$NuP = $_GET['nu'];

$json2 = file_get_contents($DatosR);
$datos_convertidos2 = json_decode($json2,true);
$cantidad = count($datos_convertidos2["abilities"]);
        
$url_img = $datos_convertidos2['forms'][0]['url'];
$json3 = file_get_contents($url_img);
$datos_convertidos3 = json_decode($json3, true);
$img = "{$datos_convertidos3['sprites']['front_default']}";
?>
        <h2 class="ficha_nombre"><?php echo "$NP"; ?></h2>
        <img src="<?php echo "{$img}";?>" alt="" class="ficha_foto">
<?php
        $z=0;
        while($z<$cantidad){
?>
        <p class="ficha_habilidades"><?php echo ($datos_convertidos2['abilities'][$z]['ability']['name']) ?></p>
<?php
            $z++;
        }
?>