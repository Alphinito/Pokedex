<?php

$json = file_get_contents('https://pokeapi.co/api/v2/pokemon/');
$Datos= json_decode($json,true);
$x = 0;
$name = "boton".$x;
while($x<20){
    $d = $Datos["results"][$x]["url"];
    $n = $Datos["results"][$x]["name"];
?>

    <a href='pokemon.php?pokemon=<?php echo "{$d}"; ?>&n=<?php echo "{$n}";?>&nu=<?php echo "{$x}";?>'><button class="nombrePokemon" name="<?php $name ?>"> <?php echo "{$Datos['results'][$x]['name']}"; ?> </button></a>

<?php
echo '<br>';
$x++;
}  
?>